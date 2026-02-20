<?php

use Illuminate\Support\Facades\Route;

Route::get('/planets', function () {

    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant.'
        ],
    ];

    return view('planets', compact('planets'));
});