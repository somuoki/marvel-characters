<?php

use App\Http\Controllers\MarvelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MarvelController::class, 'index']);
Route::get('page/{page}', [MarvelController::class, 'index']);

Route::get('character/{id}', [MarvelController::class, 'character']);
Route::get('comic/{id}', [MarvelController::class, 'comic']);
Route::get('event/{id}', [MarvelController::class, 'event']);
Route::get('series/{id}', [MarvelController::class, 'series']);
Route::get('stories/{id}', [MarvelController::class, 'story']);
