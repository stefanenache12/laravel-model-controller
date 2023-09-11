<?php

use Illuminate\Support\Facades\Route;

// Controlers
use App\Http\Controllers\Guest\PageController;

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

Route::get('/',[PageController::class, 'index'])->name('movies.index');

Route::get('/about',[PageController::class, 'about'])->name('movies.about');

Route::get('/{id}',[PageController::class, 'show'])->name('movies.show');
