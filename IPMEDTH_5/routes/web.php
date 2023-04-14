<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppController;
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

Route::get('/reset', [AppController::class, 'reset']);
Route::get('/stap_verder', [AppController::class, 'stap_verder']);
Route::get('/get_app_state', [AppController::class, 'get_app_state']);
Route::get('/get_controller_state', [AppController::class, 'get_controller_state']);
Route::get('/controller_reset', [AppController::class, 'controller_reset']);
Route::get('/controller_reset_2', [AppController::class, 'controller_reset_2']);
Route::get('/stap_count', [AppController::class, 'stap_count']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AppController::class, 'dashboard'])->name('dashboard');

// Route::get('/medicijninfo', function () {
//     return view('medicijninfo');
// })->middleware(['auth', 'verified'])->name('medicijninfo');

Route::get('/medicijninfo', [AppController::class, 'showMeds'])->name('medicijninfo');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
