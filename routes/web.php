<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('/bootstrap2', function () {
    return view('bootstrap2');
});

Route::get('/coba1', function () {
    return view('coba1');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/tugas_linktree', function () {
    return view('tugas_linktree');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/tugas_layouting', function () {
    return view('tugas_layouting');
});

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('hello',[Coba;;class, 'helloworld']);
Route;;get('pertama',funtion(){
    Return view('pertama');
});

Route::get('dosen',[Coba::class, 'index']);

Route::get('/pegawai/{nama}',[PegawwaiController::class, 'index']);

Route::get('/formulir',[PegawwaiController::class, 'formulir']); //halaman osoan formulis
Route::post('/formulir/proses',[PegawwaiController::class, 'proses']); //action form

//ruteblog
Route::get('/blog',[BlogController::class, 'home']);
Route::get('/blog/tentang',[PBlogController::class, 'tentang']); 
Route::get('/blog/kontak',[BlogController::class, 'kontak']); 
