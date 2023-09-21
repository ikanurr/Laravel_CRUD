<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/sekolahs', [SekolahController::class, 'index'])->name('sekolahs.index');
Route::get('/sekolahs/tambah', [sekolahController::class, 'tambah'])->name('sekolahs.tambah');
Route::post('/sekolahs', [SekolahController::class, 'store'])->name('sekolahs.store');
Route::get('/sekolahs/{id}/edit', [sekolahController::class, 'edit'])->name('sekolahs.edit');
Route::put('/sekolahs/{id}', [sekolahController::class, 'update'])->name('sekolahs.update');
Route::delete('/sekolahs/{id}', [sekolahController::class, 'hapus'])->name('sekolahs.hapus');

Route::get('/defaut', function () {
    return view('default');
});

Route::get('/dasboard', function () {
    return view('dasboard');
})->middleware(['auth', 'verified'])->name('dasboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
