<?php

use App\Http\Controllers\AnggotaController;
// use App\Http\Controllers\AnggotasController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TabelanggotaController;
use App\Http\Controllers\TabeleventController;
use App\Http\Controllers\TabelorderController;
use App\Http\Controllers\TabelportofolioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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

Route::get('/welcome', function () {
    return view('welcome');
});


// Route::get('layouts', function () {
// return view('layouts.master')};

// Route::get('/tampilan',Function(){
//         return view('tampilan');
//     });

Route::get('/smu_talent',Function(){
return view('smu_talent');
});
// Route::get('/',Function(){
//         Return view('tampilan');
// });

Route::resource('/', LandingPageController::class);
// Route::resource('/portofolio', LandingPageController::class);

Route::get('/portofoliopage',[LandingPageController::class, 'portofolio']);

Route::get('/listcrew',[LandingPageController::class, 'anggota']);

// Route::get('/listcrew',Function(){
// return view('crew');
// });

// login only
Route::middleware('auth')->group(function () {
    Route::get('/layout', function () {
        return view('layout.master');
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
    
    Route::get('/showanggota', function(){
        return view('anggota.show');
    });
    Route::resource('/order', OrderController::class);
    
    Route::resource('/dashboard', TabelorderController::class)->middleware('auth');

        Route::get('/dashboard',function(){
        return view('new');
    })->middleware('auth');
    Route::resource('/anggota', AnggotaController::class)->middleware('auth');
    
    Route::resource('/tabelanggota', TabelanggotaController::class);
    Route::get('/adminvieworder', [OrderController::class, "adminview"])->name('adminvieworder');
    
});

Route::resource('/user', UserController::class);

<<<<<<< HEAD
=======
Route::get('/order',Function(){
    return view('order');
});
>>>>>>> email

Route::get('/Start',Function(){
    return view('Start');
});

<<<<<<< HEAD
// Route::get('/dashboard', function () {
//     return view('order.table');
// })->middleware("auth");

require __DIR__.'/auth.php';

Route::get('/approved/{id}', [OrderController::class,'approved']);
Route::get('/canceled/{id}', [OrderController::class,'canceled']);
=======
Route::get('/send-mail', [MailController::class, 'index']);
// Route::get('/',[sendMai::class,'tampilan']);

>>>>>>> email
