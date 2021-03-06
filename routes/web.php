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

//artikel route
Route::get('/artikel','App\Http\Controllers\mycontroller@functionartikel');
//tujuan route
Route::get('/kontak','App\Http\Controllers\mycontroller@functionkontak');
//tentang route
Route::get('/tentang','App\Http\Controllers\mycontroller@functiontentang');
//produk route
Route::get('/produk','App\Http\Controllers\mycontroller@functionproduk');
Route::get('/produk1','App\Http\Controllers\mycontroller@functionproduk1');
Route::get('/produk2','App\Http\Controllers\mycontroller@functionproduk2');
Route::get('/produk3','App\Http\Controllers\mycontroller@functionproduk3');
Route::get('/produk4','App\Http\Controllers\mycontroller@functionproduk4');
Route::get('/produk5','App\Http\Controllers\mycontroller@functionproduk5');
Route::get('/produk6','App\Http\Controllers\mycontroller@functionproduk6');
Route::get('/produk7','App\Http\Controllers\mycontroller@functionproduk7');
Route::get('/produk8','App\Http\Controllers\mycontroller@functionproduk8');
Route::get('/produk9','App\Http\Controllers\mycontroller@functionproduk9');
Route::get('/produk10','App\Http\Controllers\mycontroller@functionproduk10');
Route::get('/produk11','App\Http\Controllers\mycontroller@functionproduk11');
Route::get('/produk12','App\Http\Controllers\mycontroller@functionproduk12');
Route::get('/produk13','App\Http\Controllers\mycontroller@functionproduk13');
//faq route
Route::get('/faq','App\Http\Controllers\mycontroller@functionfaq');
Route::get('/faqminuman','App\Http\Controllers\mycontroller@functionfaqminuman');
Route::get('/faqkomposisi','App\Http\Controllers\mycontroller@functionfaqkomposisi');
Route::get('/faqkesehatan','App\Http\Controllers\mycontroller@functionfaqkesehatan');
Route::get('/faqsejarah','App\Http\Controllers\mycontroller@functionfaqsejarah');
Route::get('/faqisu','App\Http\Controllers\mycontroller@functionfaqisu');
Route::get('/faqhubungi','App\Http\Controllers\mycontroller@functionfaqhubungi');

//LOGIN
Route::get('/login','App\Http\Controllers\mycontroller@functionlogin');
Route::post('/admincek','App\Http\Controllers\mycontroller@cek');

//SELECT
Route::get('/admin','App\Http\Controllers\mycontroller@adminhome');
Route::get('/admindata','App\Http\Controllers\mycontroller@admindata');

//INSERT
Route::post('/insertpesan','App\Http\Controllers\mycontroller@pesan');
Route::get('/tambahdata','App\Http\Controllers\mycontroller@tambahdata');
Route::post('/formdata','App\Http\Controllers\mycontroller@prosestambah');

//UPDATE
Route::get('/editdata/{id}','App\Http\Controllers\mycontroller@formedit');
Route::post('/proses_edit','App\Http\Controllers\mycontroller@editdata');

//DELETE
Route::get('/deletedata/{id}','App\Http\Controllers\mycontroller@deleteadmin');
Route::get('/deleteuser/{id}','App\Http\Controllers\mycontroller@delete');

