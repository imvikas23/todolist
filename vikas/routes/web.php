<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppsController;
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
Route::get('/',[AppsController::class,'showallData']);
Route::get('delete/{id}',[AppsController::class,'delete']);
Route::get('create',[AppsController::class,'create']);
Route::get('todo_submit',[AppsController::class,'todo_submit']);
Route::get('edit/{id}',[AppsController::class,'edit']);
Route::get('edit_submit/{id}',[AppsController::class,'edit_submit']);
