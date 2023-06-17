<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahController;


Route::get('/', [SampahController::class, 'index'])->name('home');
Route::get('/add', [SampahController::class, 'create'])->name('add');
Route::post('/add/send', [SampahController::class, 'store'])->name('send');

Route::post('/show/{id}', [SampahController::class, 'show'])->name('show');
Route::get('/edit/{id}', [SampahController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [SampahController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [SampahController::class, 'destroy'])->name('delete');
Route::get('/trash', [SampahController::class, 'trash'])->name('trash');
Route::get('/trash/restore/{id}', [SampahController::class, 'restore'])->name('restore');
Route::get('/trash/delete/permanent/{id}', [SampahController::class, 'permanent'])->name('permanent');



