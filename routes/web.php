<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AppV2Controller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AppController::class, 'index'])->name('App');
Route::get('/candidates', [AppController::class, 'candidatesExport'])->name('CandidatesExport');
Route::post('/candidates', [AppController::class, 'candidatesImport'])->name('CandidatesImport');

Route::get('/v2', [AppV2Controller::class, 'index'])->name('AppV2');
