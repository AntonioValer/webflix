<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aProposController extends Controller
{
    private array $members = [
            ['names' => 'Matthieu'],
            ['names' => "Fiorella"],
            ['names' => "Toto"],            
        ];

    public function person()
    {
        return view('a-propos', [
        'sujet' => 'Laravel',
        'members' => $this->members
        ]);
    }

    public function aproposPerson(string $user)
    {
        if (!in_array($user, array_column($this->members, 'names'))){
            abort(404);
        }
        return view('about-show', ['user' => $user]); 
    }
}
