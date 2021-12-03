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

Route::get('/chw','App\Http\Controllers\mycontroller@functionhw');


//home route
Route::get('/home','App\Http\Controllers\mycontroller@functionhome');
//produk route
Route::get('/produk','App\Http\Controllers\mycontroller@functionproduk');
//artikel route
Route::get('/artikel','App\Http\Controllers\mycontroller@functionartikel');
//tujuan route
Route::get('/tujuan','App\Http\Controllers\mycontroller@functiontujuan');
//tentang route
Route::get('/tentang','App\Http\Controllers\mycontroller@functiontentang');

//faq route
Route::get('/faq','App\Http\Controllers\mycontroller@functionfaq');
Route::get('/faqminuman','App\Http\Controllers\mycontroller@functionfaqminuman');
Route::get('/faqkomposisi','App\Http\Controllers\mycontroller@functionfaqkomposisi');
Route::get('/faqkesehatan','App\Http\Controllers\mycontroller@functionfaqkesehatan');
Route::get('/faqsejarah','App\Http\Controllers\mycontroller@functionfaqsejarah');
Route::get('/faqisu','App\Http\Controllers\mycontroller@functionfaqisu');
Route::get('/faqhubungi','App\Http\Controllers\mycontroller@functionfaqhubungi');

//SELECT

Route::get('/tampilbarang','App\Http\Controllers\mycontroller@tampilbarang');

//INSERT
Route::get('/tambahbarang', function () {
    return view('tambahbarang');
});

Route::post('/proses_insert','App\Http\Controllers\mycontroller@tambahbarang');
//UPDATE

Route::get('/editbarang/{id}','App\Http\Controllers\mycontroller@tampiledit');
Route::post('/proses_edit','App\Http\Controllers\mycontroller@editbarang');

//DELETE
Route::get('/deletebarang/{id}','App\Http\Controllers\mycontroller@deletebarang');

