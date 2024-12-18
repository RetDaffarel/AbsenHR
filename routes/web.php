<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\userController;
// use App\Models\Cuti;
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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//dd(auth()->user());



Route::middleware(['auth', 'verified'])->group(function () {

    //Profile
    Route::get('/profile', function () {
        return view('frontend.profile');
    });
    Route::post('/proflie', [userController::class, 'update'])->name('update');

    //Dashboard
    Route::get('/', [CutiController::class, 'id']);
    Route::get('/status', [CutiController::class, 'status']);
    Route::get('/form', [CutiController::class, 'index'])->name('form');
    Route::post('/form', [CutiController::class, 'store'])->name('form.store');
    Route::delete('/form/delete/{id}', [CutiController::class, 'destroy'])->name('form.destroy');

    //Notification
    Route::get('/notification', [NotifController::class, 'index']);
    Route::post('/form/accept/{id}', [NotifController::class, 'accept'])->name('form.accept');
    Route::delete('/form/delete/{id}', [NotifController::class, 'destroy'])->name('form.destroy');
});
