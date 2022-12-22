<?php

use App\Http\Controllers\AnggotaController;
// use App\Http\Controllers\AnggotasController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TabelanggotaController;
use App\Http\Controllers\TabeleventController;
use App\Http\Controllers\TabelorderController;
use App\Http\Controllers\TabelportofolioController;
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


Route::get('/divisi',Function(){
    Return view('divisi.home');
});
Route::get('/jabatan',Function(){
    Return view('jabatan.home');
});

Route::get('/layanan',Function(){
    Return view('layanan.home');
});
// Route::get('layouts', function () {
// return view('layouts.master')};

// Route::get('/tampilan',Function(){
//         return view('tampilan');
//     });

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

// Route::get('/tabelportofolio',Function(){
//     return view('portofolio.PortofolioTable');
// });

Route::resource('/tabelportofolio', TabelportofolioController::class);


Route::get('/createportofolio',function(){
    return view('portofolio.create');
});
Route::resource('/portofolio', PortofolioController::class);


// Route::get('/createevent', function(){
//     return view('event.create');
// });
Route::resource('/event', EventController::class);

Route::resource('/tabelevent', TabeleventController::class);

// Route::get('/createorder', function(){
//     return view('order.create');
// });
Route::resource('/order', OrderController::class);

Route::resource('/tabelorder', TabelorderController::class);

Route::resource('/anggota', AnggotaController::class);

Route::resource('/tabelanggota', TabelanggotaController::class);

Route::get('/Start',Function(){
    return view('Start');
});