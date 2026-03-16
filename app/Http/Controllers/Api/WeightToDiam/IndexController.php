<?php

namespace App\Http\Controllers\Api\WeightToDiam;

use App\Http\Controllers\Controller;
use App\Models\Gem;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $weight = $request->input('weight');

        if (!is_numeric($weight)) {
            return response()->json(['error' => 'Введено некорректное значение для веса'], 400);
        }

        $gem = Gem::where('weight', $weight)->first();

        if (!$gem) {
            return response()->json([
                'error' => 'Вес ' . $weight . ' не найден в базе данных'
            ], 404);
        }


        return response()->json([
            'diameter' => $gem->diam,
            'weight' => $gem->weight
        ]);
    }
}
