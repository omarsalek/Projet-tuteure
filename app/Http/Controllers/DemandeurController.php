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
        return view('rechercherAnnonces');

    }
    public function searchResult(Request $request):JsonResponse
    {
        $searchRes=$request->input('searchRes');
        $annonces = DB::table('annonce')->where('type','like','%'.$searchRes.'%')->get();
        return response()->json([
            'annonce'=>$annonces
        ]);
    }
}
