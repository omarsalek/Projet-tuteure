<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pageAccueil()
    {
        $title = "Rameurs Tricolors Donations";
        $posts = ['je m\'appel omar ', 'hello world'];
        return view("pageAccueil",compact('title','posts'));
    }
    public function pageInscription()
    {
        $title = "Inscription";
        return view("pageInscription" ,compact('title'));
    }
    public function connexion(Request $request){
        dd($request->all());
    }
    public function pageConnexion()
    {
        $title = "Connexion";
        return view('PageConnexion',compact('title'));
    }
}
