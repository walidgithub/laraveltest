<?php

use App\Http\Controllers\WalidController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return "walid barakat";
});

//Route::view('walid', 'index');

//Route::get('index', 'App\Http\Controllers\WalidController@index');


Route::get('walid', 'App\Http\Controllers\WalidController@index');

Route::get('users/{id}', 'App\Http\Controllers\WalidController@show');

Route::get('values/{id}', 'App\Http\Controllers\WalidController@sum');

//fullcontroller
Route::get('fullindex', 'App\Http\Controllers\fullcontroller@index');
Route::get('fullshow/{id}', 'App\Http\Controllers\fullcontroller@show');
