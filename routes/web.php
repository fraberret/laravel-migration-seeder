<?php

use App\Http\Controllers\Guest\TrainController;
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
})->name('home');

Route::get('/trains', [TrainController::class, 'index'])->name('guests.index');
Route::get('/trains/{train}', [TrainController::class, 'show'])->name('guests.show');
