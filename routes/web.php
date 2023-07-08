<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevloperController;


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
Route::get('/devloper',[DevloperController::class,'index'])->name('devloper.index');
Route::post('/devloper/create',[DevloperController::class,'create'])->name('devloper.create');
Route::get('/devloper/list',[DevloperController::class,'getList'])->name('devloper.list');