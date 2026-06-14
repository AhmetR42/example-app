<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;

class PlanetSeeder extends Seeder
{
    public function run(): void
    {
        Planet::updateOrCreate(
            ['name' => 'Mars'],
            [
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
                'size_in_km' => 6779,
            ]
        );

        Planet::updateOrCreate(
            ['name' => 'Venus'],
            [
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
                'size_in_km' => 12104,
            ]
        );

        Planet::updateOrCreate(
            ['name' => 'Earth'],
            [
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.',
                'size_in_km' => 12742,
            ]
        );

        Planet::updateOrCreate(
            ['name' => 'Jupiter'],
            [
                'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.',
                'size_in_km' => 139820,
            ]
        );
    }
}