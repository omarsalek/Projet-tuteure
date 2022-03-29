<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class DemandeurController extends Controller
{
    public function lesAnnonces()
    {
        $user = Auth::user();
        return view('lesAnnonces', compact('user'));
    }
    public function rechercherAnnonces(){
        $annonces = DB::table('annonce')->join('lieu','annonce.idLieu','=','lieu.idLieu')->get();
        return view('rechercherAnnonces',compact('annonces' ));

    }
    public function searchResult(Request $request)
    {
        $searchResListe = $request->input('searchResListe');

        $searchRes=$request->input('searchRes');
        if ($searchResListe=='tousAnnonces'){
            $annonces = DB::table('annonce')->join('lieu','annonce.idLieu','=','lieu.idLieu')->where('ville','like','%'.$searchRes.'%')->get();
            return  view('rechercherAnnonces',compact('annonces' ));

        }
        else {
            $annonces = DB::table('annonce')->join('lieu', 'annonce.idLieu', '=', 'lieu.idLieu')->where('ville', 'like', '%' . $searchRes . '%')->where([
                'type' => $searchResListe])->get();
            return view('rechercherAnnonces', compact('annonces'));

        }
    }
    public function supprimerCompte($id){
        try{
            User::destroy($id);
            return redirect()->route('pageAccueil')->with('success', 'votre compte est supprimé!');
        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('danger', 'Erreur survenue !');
        }
    }
    public function mesDemandesAcceptees(){
            $user = Auth::user();
            $id = $user->getAuthIdentifier();
            $iduser = explode(' ', $id);
            $mesDemandesAcceptees = DB::select('select * from affecter inner join annonce on annonce.idAnnonce = affecter.idAnnonce inner join users on users.id = affecter.id where  affecter.id = ?',$iduser);

            return view('mesDemandesAcceptees',['mesDemandesAcceptees' => $mesDemandesAcceptees]);
        }
    }
