<?php

namespace App\Http\Controllers\Api\AverageWeight;

use App\Http\Controllers\Controller;
use App\Models\Gem;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $min = $request->input('min');
        $max = $request->input('max');

        if (!is_numeric($min) || !is_numeric($max)) {
            return response()->json(['error' => 'Min and max must be numbers'], 400);
        }

        $average = ($min + $max) / 2;

        $averageRounded = round($average, 2);

        $gem = Gem::where('diam', $averageRounded)->first();

        if ($gem) {
            return response()->json([
                'diameter' => $gem->diam,
                'weight' => $gem->weight,
                'note' => 'exact match'
            ]);
        }

        $closestGem = Gem::orderByRaw('ABS(diam - ?)', [$averageRounded])->first();

        if (!$closestGem) {
            return response()->json(['error' => 'No diameter found in database'], 404);
        }

        return response()->json([
            'diameter' => $closestGem->diam,
            'weight' => $closestGem->weight,
            'note' => 'closest diameter used'
        ]);
    }
}
