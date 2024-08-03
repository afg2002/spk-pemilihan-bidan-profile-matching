<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\SubKriteriaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KriteriaController;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




// Protected route
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('kriteria', KriteriaController::class);
    Route::resource('subkriteria', SubKriteriaController::class);
    
    Route::get('/penilaian/all', [PenilaianController::class, 'all'])->name('penilaian.all');
    Route::resource('penilaian', PenilaianController::class);

});
Route::get('/pdf/candidates', [PenilaianController::class, 'generateCandidatesReport'])->name('candidates.report');
Route::get('/pdf/penilaian', [PenilaianController::class, 'generatePenilaianPdf'])->name('penilaian.pdf');

