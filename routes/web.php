<?php

use App\Http\Controllers\PlanetController;
use App\Http\Controllers\SolarSystemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('planets.index');
});

Route::get('/planets', [PlanetController::class, 'index'])
    ->name('planets.index');

Route::get('/planets/{planet}', [PlanetController::class, 'show'])
    ->name('planets.show');

Route::get('/solarsystems', [SolarSystemController::class, 'index'])
    ->name('solarsystems.index');

Route::get('/solarsystems/{solarSystem}', [SolarSystemController::class, 'show'])
    ->name('solarsystems.show');