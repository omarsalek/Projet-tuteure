<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateProfil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function pageAccueil()
    {
        $title = "Rameurs Tricolors Donations";
        return view("pageAccueil",compact('title'));
    }
    public function profilInformations(){
        $user= Auth::user();
        if ($user->role == 'demandeur'){
            return view('dashboard' ,compact('user') );
        }else{
            return view('dashboardOffreur' ,compact('user') );
        }


    }
    public function modificationProfil(){
        $user= Auth::user();
        return view('updateProfil' ,compact('user') );

    }
    public function updateProfil(updateProfil $request)
    {


        $user = Auth::user();
        try {

            $user->update([

                'name' => $request->nameNv,
                'prenom' => $request->prenomNv,
                'role' => $request->roleNv,
                'sexe' => $request->civiliteNv,
                'ville' => $request->villeNv,
                'age' => $request->ageNv,
                'email' => $request->emailNv,
                'password' => Hash::make($request->passwordNv),
            ]);
            return redirect()->back()->with('success', 'vos informations sont enregistrées!');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('danger', 'Email déja existe!');
        }
    }}
