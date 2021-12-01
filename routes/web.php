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
    return view('welcome');
});

Route::get('/hw', function () {
    return view('helloworld');
});


Route::get('/chw','mycontroller@functionhw');

//SELECT

Route::get('/tampilbarang','mycontroller@tampilbarang');

//INSERT
Route::get('/tambahbarang', function () {
    return view('tambahbarang');
});
Route::post('/proses_insert','mycontroller@tambahbarang');

//UPDATE

Route::get('/editbarang/{id}','mycontroller@tampiledit');
Route::post('/proses_edit','mycontroller@editbarang');


//DELETE
Route::get('/deletebarang/{id}','mycontroller@deletebarang');

