<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function pageAccueil()
    {
        $title = "Rameurs Tricolors Donations";
        return view("pageAccueil",compact('title'));
    }
    public function profilInformations(){
        $user= Auth::user();
        return view('dashboard' ,compact('user') );

    }
    public function modificationProfil(){
        $user= Auth::user();
        return view('updateProfil' ,compact('user') );

    }
}
