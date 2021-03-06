<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\HistoryController;

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

Route::get('/', function () {
    return view('welcome');
});

//Adapting the route to show the messages.blade.php
Route::get('/index', [PosterController::class, 'showAll']);

Route::get('/details', function () {
    return view('details');
}); // [PosterController::class, 'showAll']

Route::get('/details/{id}', [PosterController::class, 'details']);

Route::get('/histories', [HistoryController::class, 'history']);
