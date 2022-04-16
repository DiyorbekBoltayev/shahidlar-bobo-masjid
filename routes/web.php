<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
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

Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/ehson',[HomeController::class, 'ehson']);
Route::get('/yangiliklar',[HomeController::class, 'yangiliklar']);
Route::get('/maqola',[HomeController::class, 'maqola']);
Route::get('/kitoblar',[HomeController::class, 'kitoblar']);

Route::get('/adm',[HomeController::class,'adminmi'])->name('adminmi');
Route::post('/adm',[HomeController::class,'adminakanmi'])->name('adminakanmi');

Route::get('/admin',[AdminController::class,'index'])->name('admin');
