<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeowController;
use App\Http\Controllers\MeowsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'home']);
Route::get('/meows', [MeowsController::class, 'meows']);
Route::get('/meow/{id}', [MeowController::class, 'meow']);
