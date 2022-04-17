<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
use App\Http\Controllers\MaqolaController;
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


Route::get('/maqolalar',[MaqolaController::class, 'index']);

Route::get('/addmaqola',[MaqolaController::class, 'show']);
Route::post('/uploadmaqola',[MaqolaController::class, 'create']);

Route::get('/editmaqola/{id}',[MaqolaController::class, 'edit']);
Route::post('/updatemaqola/{id}',[MaqolaController::class, 'update']);

Route::get('/deletemaqola/{id}',[MaqolaController::class, 'destroy']);



Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/addnews',[App\Http\Controllers\FayzullaController::class,'addnews'])->name('addnews');

Route::post('/sendnews',[App\Http\Controllers\FayzullaController::class,'create'])->name('create');
Route::get('/shownews',[App\Http\Controllers\FayzullaController::class,'store'])->name('shownews');
Route::get('/edit/{id}',[App\Http\Controllers\FayzullaController::class,'show']);
Route::post('/update/{id}',[App\Http\Controllers\FayzullaController::class,'update']);
Route::get('/delete/{id}',[App\Http\Controllers\FayzullaController::class,'destroy']);
