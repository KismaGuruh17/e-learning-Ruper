<?php

use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('siswa', SiswaController::class);

    // Rute khusus untuk tindakan create dan edit
    Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::get('siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
});

// Rute lainnya...
