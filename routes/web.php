<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\ProdutosController;

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

Route::group(['namespace'=> 'App\Http\Controllers\Front'], function(){
    Route::get('/', [FrontController::class,'index'])->name('front-index');
    Route::get('/produtos/{id}', [ProdutosController::class, 'produtos'])->name('produtos-index');
});
