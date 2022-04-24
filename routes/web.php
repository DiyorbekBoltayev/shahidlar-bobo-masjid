<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
use App\Http\Controllers\MaqolaController;
use App\Http\Controllers\EhsonController;
use App\Http\Controllers\KitobController;
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



Route::get('/maqolalar',[MaqolaController::class, 'index'])->name('maqolalar');
Route::get('/maqola',[MaqolaController::class, 'indexuser'])->name('maqola');
Route::get('/maqolasingle/{id}',[MaqolaController::class, 'single'])->name('maqolasingle');
Route::get('/maqolalar',[MaqolaController::class, 'index'])->name('maqolalar');
Route::get('/addmaqola',[MaqolaController::class, 'show'])->name('addmaqola');
Route::post('/uploadmaqola',[MaqolaController::class, 'create'])->name('uploadmaqola');
Route::get('/editmaqola/{id}',[MaqolaController::class, 'edit'])->name('editmaqola');
Route::post('/updatemaqola/{id}',[MaqolaController::class, 'update'])->name('updatemaqola');
Route::get('/deletemaqola/{id}',[MaqolaController::class, 'destroy'])->name('deletemaqola');



Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/addnews',[App\Http\Controllers\FayzullaController::class,'addnews'])->name('addnews');

Route::post('/sendnews',[App\Http\Controllers\FayzullaController::class,'create'])->name('create');
Route::get('/shownews',[App\Http\Controllers\FayzullaController::class,'store'])->name('shownews');
Route::get('/edit/{id}',[App\Http\Controllers\FayzullaController::class,'show']);
Route::post('/update/{id}',[App\Http\Controllers\FayzullaController::class,'update']);
Route::get('/delete/{id}',[App\Http\Controllers\FayzullaController::class,'destroy']);

Route::get('/yangiliksingle/{id}',[App\Http\Controllers\FayzullaController::class,'single']);


Route::get('/ehsonlar',[EhsonController::class,'ehsonlar'])->name('ehsonlar');
Route::get('/addehson',[EhsonController::class,'addehson'])->name('addehson');
Route::post('/storeehson',[EhsonController::class,'storeehson'])->name('storeehson');


Route::get('/editehson/{id}',[EhsonController::class,'editehson'])->name('editehson');
Route::post('/editstore/{id}',[EhsonController::class,'editstore'])->name('editsave');
Route::get('/ehsondelete/{id}',[EhsonController::class, 'delete'])->name('ehsondelete');
Route::get('/ehsonsingle/{id}',[EhsonController::class,'single'])->name('ehsonsingle');
/////////////////////////////

Route::get('/namoztime',[App\Http\Controllers\AdminController::class,'namoztime'])->name('namoztime');
Route::post('/addnamoz',[App\Http\Controllers\AdminController::class,'addnamoz'])->name('addnamoz');
Route::get('/shownamoz',[App\Http\Controllers\AdminController::class,'shownamoz'])->name('shownamoz');
Route::get('/editnamoz/{id}',[App\Http\Controllers\AdminController::class,'editnamoz']);
Route::post('/updatenamoz/{id}',[App\Http\Controllers\AdminController::class,'updatenamoz']);


//////////////////////////////////////
Route::get('/addbook',[KitobController::class,'index']);
Route::post('/sendbooks',[KitobController::class,'create']);
Route::get('/showbook',[KitobController::class,'store']);
Route::get('/editbook/{id}',[KitobController::class,'show']);


