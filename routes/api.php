<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//In questo caso non funziona
//Route::get('/bikes', 'BikeController@index');

//Cerca il controller (per le API) in base al namespace se la path di defoult viene cambiata aggiungendo una nuova cartella 
Route::namespace('Api')->group(function() {
    Route::get('/bikes', 'BikeController@index');
});
