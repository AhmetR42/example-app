<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planeten = Planet::all();

        return view('planets', [
            'planeten' => $planeten,
        ]);
    }

    public function show(string $planet)
    {
        $gevondenPlaneet = Planet::where('name', $planet)->firstOrFail();

        return view('planets', [
            'planeten' => [$gevondenPlaneet],
        ]);
    }
}