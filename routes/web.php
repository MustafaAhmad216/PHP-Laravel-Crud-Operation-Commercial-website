<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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


Route::get('/route1',function(){
    return 'welcome from route 1';
});

Route::get('/route2',function(){
    $users = User::select('id','name')->get();
    return $users;
});

Route::get('/category',[App\Http\Controllers\CategoryController::class,'index'])->name('category.index');

Route::get('/category/show/{id}',[App\Http\Controllers\CategoryController::class,'show']);

Route::delete('/category/delete/{id}',[App\Http\Controllers\CategoryController::class,'destroy'])->name('category.destroy');

Route::get('/category/createNew',[App\Http\Controllers\CategoryController::class,'createNew'])->name('createNew');
Route::post('/category/submit',[App\Http\Controllers\CategoryController::class,'save'])->name('create');


Route::get('/category/update/{id}',[App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
Route::PUT('/category/saveupdate/{id}}',[App\Http\Controllers\CategoryController::class,'saveupdate'])->name('category.saveupdate');



/*****************************************/

Route::get('/orders',[App\Http\Controllers\OrderController::class,'index'])->name('orders.index');

//Route::get('/category/show/{id}',[App\Http\Controllers\CategoryController::class,'show']);

Route::delete('/orders/delete/{id}',[App\Http\Controllers\OrderController::class,'destroy'])->name('orders.destroy');

Route::get('/orders/create',[App\Http\Controllers\OrderController::class,'create'])->name('orders.create');
Route::post('/orders/store',[App\Http\Controllers\OrderController::class,'store'])->name('orders.store');


Route::get('/orders/edit/{id}',[App\Http\Controllers\OrderController::class,'edit'])->name('orders.edit');
Route::PUT('/orders/update/{id}}',[App\Http\Controllers\OrderController::class,'update'])->name('orders.update');

/*****************************************/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
