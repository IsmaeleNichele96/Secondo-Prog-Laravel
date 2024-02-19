<?php

use App\Http\Controllers\PublicController;
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

// home Page
Route::get('/', [PublicController::class, 'home'])->name('home');

// Chi siamo
Route::get('/chisiamo', [PublicController::class, 'chisiamo'])->name('chisiamo');

// chi siamo detail
Route::get('/chisiamo/detail/{name}', [PublicController::class, 'chisiamoDet'])->name('chisiamoDet');

// servizi
Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');

// servizi detail
Route::get('/servizi/detail/{service}', [PublicController::class, 'serviziDet'])->name('serviziDet');
