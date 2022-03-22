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

}
