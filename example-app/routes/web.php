<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeowController;

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

// * Les routes principales
Route::get('/', function () {
    return view('welcome');
});

// * Routes des meows
// Route::get('/meows', [MeowController::class, "index"])->middleware('auth');
// Route::get('/meow/{id}', [MeowController::class, "showOne"])->middleware('auth');
// Route::get('/createMeow',[MeowController::class, "create"])->middleware('auth');
// Route::get('/updateMeow', [MeowController::class, "update"])->middleware('auth');
// Route::get('/delete/{id}', [MeowController::class, "delete"])->middleware('auth');

Route::resource('meows', MeowController::class);

// * Fin des routes principales


// * Routes de l'authentif

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
