<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/fon/{code}',[App\Http\Controllers\FonController::class,'index'])->name('fon');

