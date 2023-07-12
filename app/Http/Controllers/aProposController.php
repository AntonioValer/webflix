<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aProposController extends Controller
{
    public function person()
    {
        return view('a-propos', [
        'sujet' => 'Laravel',
        'members' => [
            ['names' => 'Matthieu'],
            ['names' => "Fiorella"],
            ['names' => "Toto"],            
            ]
        ]);
    }

    public function aproposPerson(string $user)
    {
        return view('about-show', ['user' => $user]); 
    }
}
