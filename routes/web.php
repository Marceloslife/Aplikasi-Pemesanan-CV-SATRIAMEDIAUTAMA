<?php

use App\Http\Controllers\AnggotasController;
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


Route::get('/layout', function () {
    return view('layout.master');
});

Route::get('/tampilan',Function(){
        Return view('tampilan');
});

Route::get('/portofolio',Function(){
    Return view('portofolio.create');
});

Route::get('/home',Function(){
    Return view('anggota.home');
});

Route::get('/divisi',Function(){
    Return view('divisi.home');
});
Route::get('/jabatan',Function(){
    Return view('jabatan.home');
});

Route::get('/layanan',Function(){
    Return view('layanan.home');
});
=======
// Route::get('layouts', function () {
// return view('layouts.master')};

Route::get('/tampilan',Function(){
        return view('tampilan');
    });

Route::get('/smu_talent',Function(){
return view('smu_talent');
});

Route::get('/event',Function(){
    return view('event');
});

Route::get('/crew',Function(){
    return view('crew');
});

Route::get('/order',Function(){
    return view('order');
});