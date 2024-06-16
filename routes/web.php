<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('/clients')->middleware(['auth', 'can:manager'])->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
    Route::post('/', [ClientController::class, 'store'])->name('client.store');
    Route::get('/create', [ClientController::class, 'create'])->name('client.create');
    Route::get('/{id}/profile', [ClientController::class, 'show'])->name('client.show');
    Route::get('/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/{id}', [ClientController::class, 'delete'])->name('client.delete');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
