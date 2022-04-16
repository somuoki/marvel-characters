<?php

namespace App\Models;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use phpDocumentor\Reflection\Types\This;

class Marvel extends Model
{
    use HasFactory;



    /**
     * Function gets requested Data in the api
     *
     *
     * $type represents one of (character, comic, event, series, story)
     * that is associated to a character except the character type
     * which fetches the actual character
     *
     *
     * parameter type is REQUIRED
     *
     */
    public function getData($type, $url = '', $page = null){
        $client = $this->guzzleUrl($type.$this->getUrl($url),$page);

        return Cache::rememberForever($type.$url.$page, function () use ($client) {
            return $this->jsonResults($client->request("GET"));
        });
    }

    public function guzzleUrl($url,$page){
        return new Client([
            // Base URI is used with relative requests
            "base_uri" => "https://gateway.marvel.com:443/v1/public/".$url."?".$this->apiParameters($page),
            "timeout"  => 20.0,
        ]);
    }

    public function jsonResults($response)
    {
        // return $response->getBody();
        return $response->getStatusCode() == 200 ? json_decode($response->getBody(), true) : throw new Exception('Server Error');
    }

    /**
     * creates the authorization part of the url using:
     * timestamp,
     * Api public Key,
     * Api Private Key,
     * md5 hash for timestamp + Api Private Key + Api public Key
     *
     * @param $page (used to filter by page)
     */
    private function apiParameters($page){
        $ts = Carbon::now()->timestamp;
        $publicKey = env('MARVEL_PUB_KEY');
        $privateKey = env('MARVEL_PRIVATE_KEY');

        $apiAuth = [
            'ts' => $ts,
            'apikey'=> $publicKey,
            'hash' => md5($ts.$privateKey.$publicKey)
        ];

        return $this->getPagedUrl($apiAuth, $page);


    }

    /**
     * Checks if the url is empty
     * if not adds backslash
     */
    private function getUrl($url){
        return $url !== '' ? '/'.$url : '';
    }

    /**
     * checks the page number requested and returns the appropriate url query
     * @param array $apiAuth
     * @param $page
     * @return string
     */
    private function getPagedUrl(array $apiAuth, $page){
        return http_build_query(!is_null($page) && $page > 1 ? array_merge(['offset' => ($page - 1) * 20], $apiAuth) : $apiAuth);
    }
}
