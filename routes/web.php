<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Site\SiteController;
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

Route::get('/supports/create', [SupportController::class, 'create'])->name('support.create');
Route::post('/supports/store', [SupportController::class, 'store'])->name('support.store');
Route::get('/supports', [SupportController::class, 'index'])->name('support.index');

Route::get('/contato', [SiteController::class, 'contact']);
Route::get('/', function () {
    return view('welcome');
});
