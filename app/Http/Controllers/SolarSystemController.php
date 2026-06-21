<?php

namespace App\Http\Controllers;

use App\Models\SolarSystem;

class SolarSystemController extends Controller
{
    public function index()
    {
        $solarSystems = SolarSystem::withCount('planets')->get();

        return view('solarsystems.index', [
            'solarSystems' => $solarSystems,
        ]);
    }

    public function show(SolarSystem $solarSystem)
    {
        $solarSystem->load('planets');

        return view('solarsystems.show', [
            'solarSystem' => $solarSystem,
        ]);
    }
}