<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planeten = Planet::with('solar_system')->get();

        return view('planets.index', [
            'planeten' => $planeten,
        ]);
    }

    public function show(string $planet)
    {
        $gevondenPlaneet = Planet::with('solar_system')
            ->where('name', $planet)
            ->first();

        abort_unless($gevondenPlaneet, 404);

        return view('planets.index', [
            'planeten' => [$gevondenPlaneet],
        ]);
    }
}