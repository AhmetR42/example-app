<?php

use App\Http\Controllers\PlanetController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
function planetsData(): array
{
    return [
=======
Route::get('/', function () {
    return view('welcome');
});

Route::get('/planets', [PlanetController::class, 'index']);
Route::get('/planets/{planet}', [PlanetController::class, 'show']);
Route::get('/planets', function () {

    $planets = [
>>>>>>> 4e769493baf55ed667d9df9b81f5836aad3377b1
        [
            'name' => 'mars',
            'title' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
            'diameter' => '6,779 km',
        ],
        [
            'name' => 'venus',
            'title' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
            'diameter' => '12,104 km',
        ],
        [
            'name' => 'earth',
            'title' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.',
            'diameter' => '12,742 km',
        ],
        [
            'name' => 'jupiter',
            'title' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.',
            'diameter' => '139,820 km',
        ],
    ];
}

Route::view('/', 'welcome')->name('home');

Route::get('/planets', function () {
    return view('planets.index', [
        'planeten' => planetsData(),
    ]);
})->name('planets.index');

Route::get('/planets/{planet}', function (string $planet) {
    $planeet = collect(planetsData())->firstWhere('name', strtolower($planet));

    abort_if(is_null($planeet), 404);

    return view('planets.show', [
        'planeet' => $planeet,
    ]);
})->name('planets.show');
