<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Select2Controller;

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

    /* Route::get('/data_mhs', [App\Http\Controllers\DataMhsController::class, 'index'])->name('data_mhs.index');
    Route::get('/data_mhs/create', [App\Http\Controllers\DataMhsController::class, 'create'])->name('data_mhs.create');
    Route::get('/data_mhs/import', [App\Http\Controllers\DataMhsController::class, 'import'])->name('data_mhs.import');
    Route::post('/data_mhs/import', [App\Http\Controllers\DataMhsController::class, 'import_post']);
    Route::post('/data_mhs/store', [App\Http\Controllers\DataMhsController::class, 'store'])->name('data_mhs.store');
    Route::get('/data_mhs/edit/{id}', [App\Http\Controllers\DataMhsController::class, 'edit'])->name('data_mhs.edit');
    Route::put('/data_mhs/update/{id}', [App\Http\Controllers\DataMhsController::class, 'update'])->name('data_mhs.update');
    Route::delete('/data_mhs/delete/{id}', [App\Http\Controllers\DataMhsController::class, 'destroy'])->name('data_mhs.delete');

    Route::get('/data_prodi', [App\Http\Controllers\DataProdiController::class, 'index'])->name('data_prodi.index')->middleware('superadmin');
    Route::get('/data_prodi/create', [App\Http\Controllers\DataProdiController::class, 'create'])->name('data_prodi.create')->middleware('superadmin');
    Route::post('/data_prodi/store', [App\Http\Controllers\DataProdiController::class, 'store'])->name('data_prodi.store')->middleware('superadmin');
    Route::get('/data_prodi/edit/{id}', [App\Http\Controllers\DataProdiController::class, 'edit'])->name('data_prodi.edit')->middleware('superadmin');
    Route::put('/data_prodi/update/{id}', [App\Http\Controllers\DataProdiController::class, 'update'])->name('data_prodi.update')->middleware('superadmin');
    Route::delete('/data_prodi/delete/{id}', [App\Http\Controllers\DataProdiController::class, 'destroy'])->name('data_prodi.delete')->middleware('superadmin');

    Route::get('/data_pt', [App\Http\Controllers\DataPtController::class, 'index'])->name('data_pt.index')->middleware('superadmin');
    Route::get('/data_pt/create', [App\Http\Controllers\DataPtController::class, 'create'])->name('data_pt.create')->middleware('superadmin');
    Route::post('/data_pt/store', [App\Http\Controllers\DataPtController::class, 'store'])->name('data_pt.store')->middleware('superadmin');
    Route::get('/data_pt/edit/{id}', [App\Http\Controllers\DataPtController::class, 'edit'])->name('data_pt.edit')->middleware('superadmin');
    Route::put('/data_pt/update/{id}', [App\Http\Controllers\DataPtController::class, 'update'])->name('data_pt.update')->middleware('superadmin');
    Route::delete('/data_pt/delete/{id}', [App\Http\Controllers\DataPtController::class, 'destroy'])->name('data_pt.delete')->middleware('superadmin');

    Route::get('/select2', [App\Http\Controllers\Select2Controller::class, 'index'])->name('select2.index'); */

    Route::get('/perguruan_tinggi', [App\Http\Controllers\PerguruanTinggiController::class, 'index'])->name('perguruan_tinggi.index')->middleware('superadmin');
    Route::get('/perguruan_tinggi/create', [App\Http\Controllers\PerguruanTinggiController::class, 'create'])->name('perguruan_tinggi.create')->middleware('superadmin');
    Route::post('/perguruan_tinggi/store', [App\Http\Controllers\PerguruanTinggiController::class, 'store'])->name('perguruan_tinggi.store')->middleware('superadmin');
    Route::get('/perguruan_tinggi/edit/{id}', [App\Http\Controllers\PerguruanTinggiController::class, 'edit'])->name('perguruan_tinggi.edit')->middleware('superadmin');
    Route::put('/perguruan_tinggi/update/{id}', [App\Http\Controllers\PerguruanTinggiController::class, 'update'])->name('perguruan_tinggi.update')->middleware('superadmin');
    Route::delete('/perguruan_tinggi/delete/{id}', [App\Http\Controllers\PerguruanTinggiController::class, 'destroy'])->name('perguruan_tinggi.delete')->middleware('superadmin');

    Route::get('/peserta/import', [App\Http\Controllers\PesertaController::class, 'import'])->name('peserta.import');
    Route::post('/peserta/import', [App\Http\Controllers\PesertaController::class, 'import_post']);
    Route::get('/peserta/export', [App\Http\Controllers\PesertaController::class, 'export'])->name('peserta.export');
    Route::get('/peserta', [App\Http\Controllers\PesertaController::class, 'index'])->name('peserta.index');
    Route::get('/peserta/create', [App\Http\Controllers\PesertaController::class, 'create'])->name('pengajuan_pencairan.create');
    Route::post('/peserta/store', [App\Http\Controllers\PesertaController::class, 'store'])->name('peserta.store');
    Route::get('/peserta/edit/{id}', [App\Http\Controllers\PesertaController::class, 'edit'])->name('peserta.edit');
    Route::put('/peserta/update/{id}', [App\Http\Controllers\PesertaController::class, 'update'])->name('peserta.update');
    Route::delete('/peserta/delete/{id}', [App\Http\Controllers\PesertaController::class, 'destroy'])->name('peserta.delete');

    Route::get('/program_studi', [App\Http\Controllers\ProgramStudiController::class, 'index'])->name('program_studi.index')->middleware('superadmin');
    Route::get('/program_studi/create', [App\Http\Controllers\ProgramStudiController::class, 'create'])->name('program_studi.create')->middleware('superadmin');
    Route::post('/program_studi/store', [App\Http\Controllers\ProgramStudiController::class, 'store'])->name('program_studi.store')->middleware('superadmin');
    Route::get('/program_studi/edit/{id}', [App\Http\Controllers\ProgramStudiController::class, 'edit'])->name('program_studi.edit')->middleware('superadmin');
    Route::put('/program_studi/update/{id}', [App\Http\Controllers\ProgramStudiController::class, 'update'])->name('program_studi.update')->middleware('superadmin');
    Route::delete('/program_studi/delete/{id}', [App\Http\Controllers\ProgramStudiController::class, 'destroy'])->name('program_studi.delete')->middleware('superadmin');

    Route::get('/seleksi', [App\Http\Controllers\SeleksiController::class, 'index'])->name('seleksi.index')->middleware('superadmin');
    Route::get('/seleksi/create', [App\Http\Controllers\SeleksiController::class, 'create'])->name('seleksi.create')->middleware('superadmin');
    Route::post('/seleksi/store', [App\Http\Controllers\SeleksiController::class, 'store'])->name('seleksi.store')->middleware('superadmin');
    Route::get('/seleksi/edit/{id}', [App\Http\Controllers\SeleksiController::class, 'edit'])->name('seleksi.edit')->middleware('superadmin');
    Route::put('/seleksi/update/{id}', [App\Http\Controllers\SeleksiController::class, 'update'])->name('seleksi.update')->middleware('superadmin');
    Route::delete('/seleksi/delete/{id}', [App\Http\Controllers\SeleksiController::class, 'destroy'])->name('seleksi.delete')->middleware('superadmin');

    Route::get('/pencairan', [App\Http\Controllers\SeleksiController::class, 'index'])->name('seleksi.index')->middleware('superadmin');

});
