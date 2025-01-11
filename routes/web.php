<?php

use App\Models\Cars;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

Route::get('/', function () {
    $cars = Cars::all();
    return view('welcome', compact('cars'));
});
Route::get('/cars', [CarsController::class,'index'])->name('cars.index');
Route::get('/cars/create', [CarsController::class,'create'])->name('create');
Route::post('/store', [CarsController::class,'store'])->name('cars.store');
Route::get('/cars/{car}/edit', [CarsController::class,'edit'])->name('cars.edit');
Route::post('/cars/{car}/update', [CarsController::class,'update'])->name('cars.update');
Route::delete ('/cars/{car}/delete', [CarsController::class,'destroy'])->name('cars.delete');
Route::get('/cars/{car}/show', [CarsController::class,'show'])->name('cars.show');
