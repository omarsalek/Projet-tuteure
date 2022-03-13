<?php

namespace App\Http\Controllers;

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
        $annonces = DB::table('annonce')->get();
        return view('rechercherAnnonces',compact('annonces' ));

    }
    public function searchResult(Request $request):JsonResponse
    {
        $searchResListe = $request->input('searchResListe');

        $searchRes=$request->input('searchRes');

        #->join('lieu','annonce.idLieu','=','lieu.idLieu')->orWhere('ville','like','%'.$searchRes.'%')
        $annonces = DB::table('annonce')->where([
            'type' => $searchResListe
        ])->join('lieu','annonce.idLieu','=','lieu.idLieu')->where('ville','like','%'.$searchRes.'%')->get();

        return response()->json([
            'annonce'=>$annonces
        ]);
    }
}
