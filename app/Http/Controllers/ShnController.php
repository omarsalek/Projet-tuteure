<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShnController extends Controller
{
    public function gererAnnonces()
    {
        $user = Auth::user();
        return view('gererAnnonces', compact('user'));
    }
    public function choixCreationAnnonces(){
        return view('choixCreationAnnonces');
    }
}
