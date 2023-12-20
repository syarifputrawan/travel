<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerkenalanController;
use App\Http\Controllers\SedikitController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrevelingController;
use App\Http\Controllers\View_kontakController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [IndexController::class, 'index']);
Route::get('/booking/{id}', [BookingController::class, 'booking']);
Route::get('/about1', [IndexController::class, 'about']);
Route::get('/contact', [IndexController::class, 'contact']);
Route::get('/services', [IndexController::class, 'services']);
Route::post('/kontak_store', [KontakController::class, 'store']);
Route::post('/invoice_store', [BookingController::class, 'store']);
Route::get('/invoice', [InvoiceController::class, 'invoice']);
Route::get('/dashboard', function () {
    return view('backend.layouts.content ');
});
Route::get('/login', [LoginController::class, 'users'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/kontak/store', [KontakController::class, 'store']);

Route::middleware(['auth'])->group(function () {

    Route::get('/index', function () {
        return view('backend.index');
    });

    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', function () {
        return view('backend.layouts.content ');
    });

Route::get('/about', [AboutController::class, 'about']);
Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
Route::post('/about/store', [AboutController::class, 'store']);
Route::get('/about/edit/{id}', [AboutController::class, 'edit']);
Route::post('/about/update/{id}', [AboutController::class, 'update']);
Route::get('/about/destroy/{id}', [AboutController::class, 'destroy']);

Route::get('/perkenalan', [PerkenalanController::class, 'perkenalan']);
Route::get('/perkenalan/create', [PerkenalanController::class, 'create'])->name('perkenalan.create');
Route::post('/perkenalan/store', [PerkenalanController::class, 'store']);
Route::get('/perkenalan/edit/{id}', [PerkenalanController::class, 'edit']);
Route::post('/perkenalan/update/{id}', [PerkenalanController::class, 'update']);
Route::get('/perkenalan/destroy/{id}', [PerkenalanController::class, 'destroy']);

Route::get('/treveling', [TrevelingController::class, 'treveling']);
Route::get('/treveling/create', [TrevelingController::class, 'create'])->name('treveling.create');
Route::post('/treveling/store', [TrevelingController::class, 'store']);
Route::get('/treveling/edit/{id}', [TrevelingController::class, 'edit']);
Route::post('/treveling/update/{id}', [TrevelingController::class, 'update']);
Route::get('/treveling/destroy/{id}', [TrevelingController::class, 'destroy']);

Route::get('/sedikit', [SedikitController::class, 'sedikit']);
Route::get('/sedikit/edit/{id}', [SedikitController::class, 'edit']);
Route::post('/sedikit/update/{id}', [SedikitController::class, 'update']);
Route::get('/sedikit/destroy/{id}', [SedikitController::class, 'destroy']);

Route::get('/view_kontak', [View_kontakController::class, 'view_kontak']);
Route::get('/view_kontak/edit/{id}', [View_kontakController::class, 'edit']);
Route::post('/view_kontak/update/{id}', [View_kontakController::class, 'update']);
Route::get('/view_kontak/destroy/{id}', [View_kontakController::class, 'destroy']);

Route::get('/footer', [FooterController::class, 'view_kontak']);
Route::get('/footer/edit/{id}', [FooterController::class, 'edit']);
Route::post('/footer/update/{id}', [FooterController::class, 'update']);
Route::get('/footer/destroy/{id}', [FooterController::class, 'destroy']);

Route::get('/team', [TeamController::class, 'team']);
Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('/team/store', [TeamController::class, 'store']);
Route::get('/team/edit/{id}', [TeamController::class, 'edit']);
Route::post('/team/update/{id}', [TeamController::class, 'update']);
Route::get('/team/destroy/{id}', [TeamController::class, 'destroy']);
});
