<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class BiorritmesController extends Controller
{
    public function calcular(Request $request)
    {
        $nom = $request->input('nom');
        $data_naixement = Carbon::parse($request->input('data_naixement'));
        $dies_des_de_naixement = $data_naixement->diffInDays(Carbon::now());

        // Càlculs dels biorritmes
        $biorritme_fisic = sin(2 * pi() * ($dies_des_de_naixement / 23));
        $biorritme_emotiu = sin(2 * pi() * ($dies_des_de_naixement / 28));
        $biorritme_intelectual = sin(2 * pi() * ($dies_des_de_naixement / 33));

        // Registrar resultats en un arxiu JSON
        $resultat = [
            'nom' => $nom,
            'data_naixement' => $data_naixement->toDateString(),
            'biorritme_fisic' => $biorritme_fisic,
            'biorritme_emotiu' => $biorritme_emotiu,
            'biorritme_intelectual' => $biorritme_intelectual,
            'data' => Carbon::now()->toDateTimeString(),
        ];

        $json_data = [];
        $path = storage_path('biorritmes.json');
        if (File::exists($path)) {
            $json_data = json_decode(File::get($path), true);
        }
        $json_data[] = $resultat;
        File::put($path, json_encode($json_data, JSON_PRETTY_PRINT));

        // Retornar la vista amb els resultats
        return view('bio.result', compact('nom', 'data_naixement', 'biorritme_fisic', 'biorritme_emotiu', 'biorritme_intelectual'));
    }

    public function report()
    {
        $path = storage_path('biorritmes.json');
        $json_data = File::exists($path) ? File::get($path) : '[]';
        return view('bio.report', compact('json_data'));
    }
}
