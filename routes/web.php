<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\MessagesController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'home']);
Route::get('/messages', [MessagesController::class, 'messages'])->name('messages');
//Route::get('/message/{id}', [MessageController::class, 'message']);
Route::get('/message/{id}', [MessageController::class, 'show'])->name('message.show');
Route::get('/message/{id}/edit', [MessageController::class, 'edit'])->name('message.edit');
Route::patch('/message/{id}', [MessageController::class, 'update'])->name('message.update');
Route::delete('/message/{id}', [MessageController::class, 'destroy'])->name('message.destroy');
Route::get('/user/{uuid}', [UserController::class, 'show'])->name('user.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [UserController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [UserController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
