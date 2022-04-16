<?php

namespace App\Http\Controllers;

use App\Models\Marvel;
use Illuminate\Http\Request;

class MarvelController extends Controller
{

    private Marvel $marvel;

    public function __construct(){
        $this->marvel = new Marvel();
    }

    public function index($page = null){
        return view('index', [
            'characters' => $this->marvel->getData('characters','',$page)
        ]);
    }

    public function character($id){
        return view('character',[
            'character' => $this->marvel->getData('characters',$id),
            'comics' => $this->marvel->getData('characters',$id.'/comics'),
            'events' => $this->marvel->getData('characters',$id.'/events'),
            'series' => $this->marvel->getData('characters',$id.'/series'),
            'stories' => $this->marvel->getData('characters',$id.'/stories'),
        ]);
    }

    public function comic($id){
        return view('comic', [
            'comic' => $this->marvel->getData('comics',$id),
            'characters' => $this->marvel->getData('comics',$id.'/characters'),
        ]);
    }

    public function event($id){
        return view('event', [
            'event' => $this->marvel->getData('events', $id),
            'characters' => $this->marvel->getData('events', $id.'/characters'),
        ]);
    }

    public function series($id){
        return view('series', [
            'series' => $this->marvel->getData('series', $id),
            'characters' => $this->marvel->getData('series', $id.'/characters'),
        ]);
    }

    public function story($id){
        return view('story', [
            'story' => $this->marvel->getData('stories', $id),
            'characters' => $this->marvel->getData('stories', $id.'/characters'),
        ]);
    }
}
