<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;

Route::get('/mahasiswa', function () {
    return 'Hallo mahasiswa';
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/{param1}', [MatakuliahController::class, 'show']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('/home', [HomeController::class, 'index']);
