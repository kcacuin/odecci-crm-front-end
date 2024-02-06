<?php

use App\Http\Controllers\ClientsCorporateController;
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
    return view('auth.login');
});

Route::get('dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('clients/corporate', [ClientsCorporateController::class, 'index'])->name('clients');
    Route::post('clients/corporate', [ClientsCorporateController::class, 'store']);
    Route::get('clients/corporate/add', [ClientsCorporateController::class, 'create']);
});

Route::get('messages', function () {
    return view('messages.index');
})->middleware(['auth', 'verified'])->name('messages');

Route::get('appointments', function () {
    return view('appointments.index');
})->middleware(['auth', 'verified'])->name('appointments');

Route::get('projects', function () {
    return view('projects.index');
})->middleware(['auth', 'verified'])->name('projects');

Route::get('settings', function () {
    return view('settings.index');
})->middleware(['auth', 'verified'])->name('settings');

Route::get('admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
