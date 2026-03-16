<?php

namespace App\Http\Controllers\Api\DiamToWeight;

use App\Http\Controllers\Controller;
use App\Models\Gem;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $diam = $request->input('diam');

        if (!is_numeric($diam)) {
            return response()->json(['error' => 'Введено некорректное значение для диаметра'], 400);
        }

        $diameterWeight = Gem::where('diam', $diam)->first();

        if (!$diameterWeight) {
            return response()->json([
                'error' => 'Диаметр ' . $diam . ' не найден в базе данных'
            ], 404);
        }

        return response()->json([
            'diameter' => $diameterWeight->diam,
            'weight' => $diameterWeight->weight
        ]);
    }
}

