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

