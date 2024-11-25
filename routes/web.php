<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AjaxController;

Route::get('/fon',[App\Http\Controllers\FonController::class,'index'])->name('fon');

Route::permanentRedirect('/{seg1}/{seg2}/{seg3}', '/{seg1}/{seg2}')
    ->name('routeMe3');

// Route::permanentRedirect('/fons', '/fons/IPB');

// Route::permanentRedirect('/{seg1}', '/{seg1}/gunluk');

Route::get(
    '/{seg1}/{seg2}',
    ['App\Http\Controllers\FonController'::class, 'route2']
)->name('routeMe2');

Route::get('/{seg1}', ['App\Http\Controllers\FonController'::class, 'route1'])
    ->name('routeMe1');

Route::get('/', ['App\Http\Controllers\FonController'::class, 'route0'])
    ->name('routeMe0');


Route::get('/ajax/current-time', [AjaxController::class, 'getCurrentTime'])->name('ajax.current-time');

