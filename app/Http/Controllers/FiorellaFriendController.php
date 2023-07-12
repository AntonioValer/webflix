<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FiorellaFriendController extends Controller
{
    public function show(Request $request, string $friend = null)
    {
            // Pour les paramétres get
        dump($_GET['color'] ?? null); // Ancienne mé<thode ..
        dump($request->input('color', 'rose')); // Nouvelle méthode
        dump(request('color')); // Nouvelle méthode (Es una funcion que da como resultado un objecto)


        return view('fiorella', [
            'age' => Carbon::parse('2019-12-31')->age,
            'color' => ucfirst($request->input('color', 'rose')), 
            // "ucfirst" es simplemente para mostar la primera letra en mayuscula
            'friend' => ucfirst($friend),
        ]);
    }
}
