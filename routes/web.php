
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\CvController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home.page');

// Route khusus CV pelanggan, letakkan sebelum resource
Route::get('/pelanggan/{id}/cv', [
    PelangganController::class,
    'cv'
])->name('pelanggan.cv');

// CRUD pelanggan
Route::resource('pelanggan', PelangganController::class);

// CRUD profil CV
Route::resource('cv', CvController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('/question/response', [QuestionController::class, 'response'])
    ->name('question.response');
