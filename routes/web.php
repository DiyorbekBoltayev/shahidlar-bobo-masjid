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
Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('auth');
Route::post('/addnamoz',[AdminController::class,'addnamoz'])->name('addnamoz')->middleware('auth');
Route::get('/shownamoz',[AdminController::class,'shownamoz'])->name('shownamoz')->middleware('auth');
Route::get('/editnamoz/{id}',[AdminController::class,'editnamoz'])->middleware('auth');
Route::post('/updatenamoz/{id}',[AdminController::class,'updatenamoz'])->middleware('auth');


//////////////////////////////////////////////////////////
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/ehson',[HomeController::class, 'ehson']);
Route::get('/yangiliklar',[HomeController::class, 'yangiliklar']);
Route::get('/maqola',[HomeController::class, 'maqola']);
Route::get('/kitoblar',[HomeController::class, 'kitoblar']);
Route::get('/adm',[HomeController::class,'adminmi'])->name('adminmi');
Route::post('/adm',[HomeController::class,'adminakanmi'])->name('adminakanmi');


//////////////////////////////////////////////////////////
Route::get('/maqolalar',[MaqolaController::class, 'index'])->name('maqolalar')->middleware('auth');
Route::get('/maqola',[MaqolaController::class, 'indexuser'])->name('maqola');
Route::get('/maqolasingle/{id}',[MaqolaController::class, 'single'])->name('maqolasingle');
Route::get('/maqolalar',[MaqolaController::class, 'index'])->name('maqolalar')->middleware('auth');;
Route::get('/addmaqola',[MaqolaController::class, 'show'])->name('addmaqola')->middleware('auth');;
Route::post('/uploadmaqola',[MaqolaController::class, 'create'])->name('uploadmaqola')->middleware('auth');;
Route::get('/editmaqola/{id}',[MaqolaController::class, 'edit'])->name('editmaqola')->middleware('auth');;
Route::post('/updatemaqola/{id}',[MaqolaController::class, 'update'])->name('updatemaqola')->middleware('auth');;
Route::get('/deletemaqola/{id}',[MaqolaController::class, 'destroy'])->name('deletemaqola')->middleware('auth');;



//////////////////////////////////////////////////////////
Route::get('/addnews',[FayzullaController::class,'addnews'])->name('addnews')->middleware('auth');
Route::post('/sendnews',[FayzullaController::class,'create'])->name('create')->middleware('auth');
Route::get('/shownews',[FayzullaController::class,'store'])->name('shownews')->middleware('auth');
Route::get('/edit/{id}',[FayzullaController::class,'show'])->middleware('auth');
Route::post('/update/{id}',[FayzullaController::class,'update'])->middleware('auth');
Route::get('/delete/{id}',[FayzullaController::class,'destroy'])->middleware('auth');
Route::get('/yangiliksingle/{id}',[FayzullaController::class,'single']);


//////////////////////////////////////////////////////////
Route::get('/ehsonlar',[EhsonController::class,'ehsonlar'])->name('ehsonlar')->middleware('auth');
Route::get('/addehson',[EhsonController::class,'addehson'])->name('addehson')->middleware('auth');
Route::post('/storeehson',[EhsonController::class,'storeehson'])->name('storeehson')->middleware('auth');
Route::get('/editehson/{id}',[EhsonController::class,'editehson'])->name('editehson')->middleware('auth');
Route::post('/editstore/{id}',[EhsonController::class,'editstore'])->name('editsave')->middleware('auth');
Route::get('/ehsondelete/{id}',[EhsonController::class, 'delete'])->name('ehsondelete')->middleware('auth');
Route::get('/ehsonsingle/{id}',[EhsonController::class,'single'])->name('ehsonsingle');


Route::get('/gallery',function (){
    return view('user.gallery');
});


//////////////////////////////////////
Route::get('/addbook',[KitobController::class,'index'])->middleware('auth');
Route::post('/sendbooks',[KitobController::class,'create'])->middleware('auth');
Route::get('/showbook',[KitobController::class,'store'])->name('showbook')->middleware('auth');
Route::get('/editbook/{id}',[KitobController::class,'show'])->middleware('auth');
Route::get('/deletebook/{id}',[KitobController::class,'destroy'])->middleware('auth');
Route::post('/updatebook/{id}',[KitobController::class,'update'])->name('updatebook')->middleware('auth');
Route::get('/download/{id}',[KitobController::class,'getDownload'])->name('yukla');



///////////////////////////////
Route::resource('video',\App\Http\Controllers\VideoController::class)->middleware('auth');
Route::get('videos',[\App\Http\Controllers\VideoController::class,'showw']);



Route::get('/photoindex',[\App\Http\Controllers\ImageController::class,'index'])->name('index')->middleware('auth');
Route::get('/photocreate',[\App\Http\Controllers\ImageController::class,'create'])->name('create')->middleware('auth');
Route::post('/photostore',[\App\Http\Controllers\ImageController::class,'store'])->name('store')->middleware('auth');
Route::get('/photoedit/{id}',[\App\Http\Controllers\ImageController::class,'edit'])->middleware('auth');
Route::post('/photoupdate/{id}',[\App\Http\Controllers\ImageController::class,'update'])->middleware('auth');
Route::get('/photodelete/{id}',[\App\Http\Controllers\ImageController::class,'destroy'])->middleware('auth');
Route::get('/gallery/',[\App\Http\Controllers\ImageController::class,'user']);

Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
