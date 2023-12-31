<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[FrontController::class,'index'])->name('front.home');

Route::post('/users',[UserController::class,'store'])->name('users.store');

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
