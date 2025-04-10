<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCriteriaController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\Part\Multipart\AlternativePart;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('criteria', CriteriaController::class);
    Route::resource('sub-criteria', SubCriteriaController::class);
    Route::resource('alternative', AlternativeController::class);
});

require __DIR__ . '/auth.php';
