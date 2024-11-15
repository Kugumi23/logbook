<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\visitorsController;

Route::get('/',[visitorsController::class, 'index'])->name('visitors.index');

Route::get('/visitors/create',[visitorsController::class, 'create'])->name('visitors.create');
Route::post('/visitors',[visitorsController::class, 'store'])->name('visitors.store');
Route::get('/visitors/showAll',[visitorsController::class, 'showAll'])->name('visitors.showAll');
Route::get('/visitors/edit',[visitorsController::class, 'foredit'])->name('visitors.foredit');
Route::post('/visitors/update',[visitorsController::class, 'update'])->name('visitors.update');

