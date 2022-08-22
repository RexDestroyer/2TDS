<?php

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
    return view('projeto');
});
 
Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/1', function () {
    return view('aula1');
});
Route::get('/2', function () {
    return view('aula2');
});
Route::get('/3', function () {
    return view('aula3');
});
Route::get('/4', function () {
    return view('aula4');
});
Route::get('/5', function () {
    return view('aula5');
});
Route::get('/6', function () {
    return view('aula6');
});
Route::get('/7', function () {
    return view('aula7');
});
Route::get('/8', function () {
    return view('aula8');
});
Route::get('/9', function () {
    return view('aula9');
});
Route::get('/10', function () {
    return view('aula10');
});


