<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\visitorsController;

Route::get('/',[visitorsController::class, 'index']);
Route::get('/visitors/create',[visitorsController::class, 'create'])->name('visitors.create');
Route::post('/visitors',[visitorsController::class, 'store'])->name('visitors.store');
Route::get('/logbook/{visitors}',[visitorsController::class, 'show'])->name('visitors.show');

