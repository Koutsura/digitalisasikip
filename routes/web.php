<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/blank-page', [App\Http\Controllers\HomeController::class, 'blank'])->name('blank');


    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/ganti-password', [ProfileController::class, 'gantipassword'])->name('profile.gantipassword');
    Route::put('/profile/password', [ProfileController::class, 'password'])->name('profile.password');

    Route::get('/hakakses', [App\Http\Controllers\HakaksesController::class, 'index'])->name('hakakses.index')->middleware('superadmin');
    Route::get('/hakakses/edit/{id}', [App\Http\Controllers\HakaksesController::class, 'edit'])->name('hakakses.edit')->middleware('superadmin');
    Route::put('/hakakses/update/{id}', [App\Http\Controllers\HakaksesController::class, 'update'])->name('hakakses.update')->middleware('superadmin');
    Route::delete('/hakakses/delete/{id}', [App\Http\Controllers\HakaksesController::class, 'destroy'])->name('hakakses.delete')->middleware('superadmin');

    Route::get('/data_mhs', [App\Http\Controllers\DataMhsController::class, 'index'])->name('data_mhs.index');
    Route::get('/data_mhs/create', [App\Http\Controllers\DataMhsController::class, 'create'])->name('data_mhs.create');
    Route::post('/data_mhs/store', [App\Http\Controllers\DataMhsController::class, 'store'])->name('data_mhs.store');
    Route::get('/data_mhs/edit/{id}', [App\Http\Controllers\DataMhsController::class, 'edit'])->name('data_mhs.edit');
    Route::put('/data_mhs/update/{id}', [App\Http\Controllers\DataMhsController::class, 'update'])->name('data_mhs.update');
    Route::delete('/data_mhs/delete/{id}', [App\Http\Controllers\DataMhsController::class, 'destroy'])->name('data_mhs.delete');


});
