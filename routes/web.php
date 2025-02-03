<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AppController::class, 'index'])->name('App');
Route::get('/candidates', [AppController::class, 'candidatesExport'])->name('CandidatesExport');
Route::post('/candidates', [AppController::class, 'candidatesImport'])->name('CandidatesImport');
