<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateProfil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            $id = $user->getAuthIdentifier();
            $iduser = explode(' ', $id);
            $nbAcceptation = DB::select('select count(*) as nb from affecter where affecter.id = ?',$iduser);
            return view('dashboard' ,compact('user','nbAcceptation') );
        }else{
            $id = $user->getAuthIdentifier();
            $iduser = explode(' ', $id);
            $nbDemande = DB::select('select count(*) as nb from choisir inner join annonce on annonce.idAnnonce = choisir.idAnnonce inner join users on users.id = choisir.idchoix where annonce.etatAnnonce!=2 and annonce.iduser = ?',$iduser);

            return view('dashboardOffreur' ,compact('user' ,'nbDemande') );
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
