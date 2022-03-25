<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class GererOffre extends Controller
{
    public function consulterOffre(Request $request){
        $request->validate([ 'idAnnonce' => 'required' ]);
        $id = $request->input('idAnnonce');
        $annonce = DB::select('select idVetement from annonce where idAnnonce = ?',[$id]);

        if (($annonce[0]->idVetement)!=null){
            $annonceReq = DB::select('select * from annonce natural join vetementchaussure natural join lieu where idAnnonce = ?',[$id]);
            return view('annonceDetails',['annonce' => $annonceReq]);

        }else{
            $annonceReq = DB::select('select * from annonce natural join materiels natural join lieu where idAnnonce = ?', [$id]) ;
            return view('annonceDetails2',['annonce' => $annonceReq]);

        }
    }

    public function choisirOffre(Request $request){
        try{
            $request->validate([
                'idAnnonce' => 'required',
            ]);
            $idAnnonce = $request->input('idAnnonce');
            $user = Auth::user();

            DB::table('annonce')->where([
                'idAnnonce' => $idAnnonce])->update([
                'etatAnnonce' => 1 ]);
            DB::table('choisir')->insert(['id'=>$user->getAuthIdentifier(),
                                        'idAnnonce'=>$idAnnonce
                    ]);
                 return redirect('RechercherAnnonces')->with('success', 'votre demande est bien envoyée!');

        } catch (\Illuminate\Database\QueryException $ex) {

            return redirect('RechercherAnnonces')->with('danger', 'Votre demande est déja envoyée!');

        }
    }

}
