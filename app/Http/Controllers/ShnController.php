<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
    public function creationAnnonceVetements(){
        return view('creationAnnonceVetements');
    }
    public function enregistrerAnnonceVet(Request $request){
            $user = Auth::user();
            try {

                $request->validate([
                    'adresse' => 'required',
                    'ville' => 'required',
                    'dateAnnonce'=>'required',
                ]);

                $query = DB::table('lieu')->insert([
                      'adresse' => $request->input('adresse'),
                      'ville' => $request->input('ville')
                ]);
                $idLieu = DB::getPdo()->lastInsertId();;

                $query2 = DB::table('annonce')->insert([
                    'date' => $request->input('dateAnnonce'),
                    'type' => $request->input('vetements'),
                    'id' => $user->id,
                    'etatAnnonce'=>0,
                    'idLieu'=>$idLieu

                ]);

                return redirect()->back()->with('success', 'votre annonce est enregistrée!');
            } catch (\Illuminate\Database\QueryException $ex) {
                return redirect()->back()->with('danger', 'Erreur survenue !');
            }
        }
}
