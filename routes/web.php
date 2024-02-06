<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
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


Route::get('/',[DataController::class,'index'])->name('index');
Route::get('/add/data',[DataController::class,'add_data'])->name('add.data');
Route::post('/store/data',[DataController::class,'store_data'])->name('store.data');
Route::get('/edit/data/{id}',[DataController::class,'edit_data'])->name('edit.data');
Route::post('/update/data/{id}',[DataController::class,'update_data'])->name('update.data');
Route::get('/delete/data/{id}',[DataController::class,'delete_data'])->name('delete.data');

