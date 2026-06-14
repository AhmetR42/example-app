<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index()
    {
        $planeten = DB::table('planets')->get();

        return view('planets', [
            'planeten' => $planeten,
        ]);
    }

    public function show(string $planet)
    {
        $gevondenPlaneet = DB::table('planets')
            ->where('name', $planet)
            ->first();

        abort_unless($gevondenPlaneet, 404);

        return view('planets', [
            'planeten' => [$gevondenPlaneet],
        ]);
    }
}