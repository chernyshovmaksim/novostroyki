<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ReferController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/dashboard', [PageController::class, 'dashboard'])
    ->middleware(['auth'])->name('dashboard');

Route::get('/refer/{refer}', [ReferController::class, 'index']);

require __DIR__ . '/auth.php';
