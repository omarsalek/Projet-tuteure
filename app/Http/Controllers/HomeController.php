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
    public function profilInformations(){
        $user= Auth::user();
        //$this->user = User::find(Auth::user()->id);

        //var_dump($user);
        //exit();
        return view('dashboard' ,compact('user') );

    }
}
