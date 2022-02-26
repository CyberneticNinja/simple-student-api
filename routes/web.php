<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
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
    // $response = Http::connectTimeout(30)->get('http://api.openweathermap.org/data/2.5/weather?q=London&appid=14c44fd4bb6fa04d940810355d9bd4d3');
    // dd($response->body());
});
