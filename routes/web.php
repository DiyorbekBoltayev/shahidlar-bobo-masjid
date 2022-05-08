<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
use App\Http\Controllers\MaqolaController;
use App\Http\Controllers\EhsonController;
use App\Http\Controllers\KitobController;
use App\Http\Controllers\FayzullaController;
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


//Route::get('/namoztime',[App\Http\Controllers\AdminController::class,'namoztime'])->name('namoztime');
Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::post('/addnamoz',[AdminController::class,'addnamoz'])->name('addnamoz');
Route::get('/shownamoz',[AdminController::class,'shownamoz'])->name('shownamoz');
Route::get('/editnamoz/{id}',[AdminController::class,'editnamoz']);
Route::post('/updatenamoz/{id}',[AdminController::class,'updatenamoz']);


//////////////////////////////////////////////////////////
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/ehson',[HomeController::class, 'ehson']);
Route::get('/yangiliklar',[HomeController::class, 'yangiliklar']);
Route::get('/maqola',[HomeController::class, 'maqola']);
Route::get('/kitoblar',[HomeController::class, 'kitoblar']);
Route::get('/adm',[HomeController::class,'adminmi'])->name('adminmi');
Route::post('/adm',[HomeController::class,'adminakanmi'])->name('adminakanmi');


//////////////////////////////////////////////////////////
Route::get('/maqolalar',[MaqolaController::class, 'index'])->name('maqolalar');
Route::get('/maqola',[MaqolaController::class, 'indexuser'])->name('maqola');
Route::get('/maqolasingle/{id}',[MaqolaController::class, 'single'])->name('maqolasingle');
Route::get('/maqolalar',[MaqolaController::class, 'index'])->name('maqolalar');
Route::get('/addmaqola',[MaqolaController::class, 'show'])->name('addmaqola');
Route::post('/uploadmaqola',[MaqolaController::class, 'create'])->name('uploadmaqola');
Route::get('/editmaqola/{id}',[MaqolaController::class, 'edit'])->name('editmaqola');
Route::post('/updatemaqola/{id}',[MaqolaController::class, 'update'])->name('updatemaqola');
Route::get('/deletemaqola/{id}',[MaqolaController::class, 'destroy'])->name('deletemaqola');



//////////////////////////////////////////////////////////
Route::get('/addnews',[FayzullaController::class,'addnews'])->name('addnews');
Route::post('/sendnews',[FayzullaController::class,'create'])->name('create');
Route::get('/shownews',[FayzullaController::class,'store'])->name('shownews');
Route::get('/edit/{id}',[FayzullaController::class,'show']);
Route::post('/update/{id}',[FayzullaController::class,'update']);
Route::get('/delete/{id}',[FayzullaController::class,'destroy']);
Route::get('/yangiliksingle/{id}',[FayzullaController::class,'single']);


//////////////////////////////////////////////////////////
Route::get('/ehsonlar',[EhsonController::class,'ehsonlar'])->name('ehsonlar');
Route::get('/addehson',[EhsonController::class,'addehson'])->name('addehson');
Route::post('/storeehson',[EhsonController::class,'storeehson'])->name('storeehson');
Route::get('/editehson/{id}',[EhsonController::class,'editehson'])->name('editehson');
Route::post('/editstore/{id}',[EhsonController::class,'editstore'])->name('editsave');
Route::get('/ehsondelete/{id}',[EhsonController::class, 'delete'])->name('ehsondelete');
Route::get('/ehsonsingle/{id}',[EhsonController::class,'single'])->name('ehsonsingle');


Route::get('/gallery',function (){
    return view('user.gallery');
});
Route::get('/video',function (){
    return view('user.video');
});



//////////////////////////////////////
Route::get('/addbook',[KitobController::class,'index']);
Route::post('/sendbooks',[KitobController::class,'create']);
Route::get('/showbook',[KitobController::class,'store']);
Route::get('/editbook/{id}',[KitobController::class,'show']);
Route::get('/deletebook/{id}',[KitobController::class,'destroy']);
Route::post('/updatebook{id}',[KitobController::class,'update'])->name('updatebook');
Route::get('/download/{id}',[KitobController::class,'getDownload'])->name('yukla');


