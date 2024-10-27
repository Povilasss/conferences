<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;

// Pagrindinis puslapis
Route::get('/', [HomeController::class, 'index'])->name('home');

// Kliento posistemis
Route::prefix('client')->group(function () {
    Route::get('/conferences', [ClientController::class, 'index'])->name('client.index'); // Konferencijų sąrašas
    Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('client.show'); // Konferencijos peržiūra
});

// Darbuotojo posistemis
Route::prefix('employee')->group(function () {
    Route::get('/conferences', [EmployeeController::class, 'index'])->name('employee.conferences.index'); // Visų konferencijų sąrašas
    Route::get('/conferences/{id}', [EmployeeController::class, 'show'])->name('employee.conferences.show'); // Konferencijos peržiūra
    Route::get('/', function() {
        return view('employee.dashboard');
    })->name('employee.dashboard');
});

// Administratoriaus posistemis
Route::get('/admin', function() {
    return view('admin.dashboard');
})->name('admin.dashboard');


