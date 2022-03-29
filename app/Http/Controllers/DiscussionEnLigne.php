<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DiscussionEnLigne extends Controller
{
    public function enligne(Request $request)
    {
        $request->validate([
            'idAnnonce' => 'required',
            'idchoix' => 'required',
            'type' => 'required'
        ]);
        $type = $request->input('type');
        $idannonce = $request->input('idAnnonce');
        $idAnnonceArray = explode(' ', $idannonce);
        $user = Auth::user();
        $idUserConnect = strval($user->getAuthIdentifier());
        $messages = DB::select('SELECT * from espaceDiscussion where idAnnonce=? order by idMessage ASC', $idAnnonceArray);
        return view('discussionRendezVous', compact('type', 'messages', 'idUserConnect' ,'idAnnonceArray'));

    }

    public function envoyerMessageEnLigne(Request $request)
    {
        $user = Auth::user();
        $id = $user->getAuthIdentifier();
        $iduser = explode(' ', $id);
        $filename =NULL;

        #ImagInsert
        if ($request->hasFile('photoDiscussion')) {
            $file = $request->file("photoDiscussion");
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $path = $request->file('photoDiscussion')->storeAs('imageAnnonces', $filename, 'public');
        }
        $idAnnonce = $request->input('idAnnonce');


        $nameUser = DB::select('SELECT name from users where id = ?', $iduser);


        $messageInsert = DB::table('espacediscussion')->insert([
            'nomUtilisateur' => $nameUser[0]->name,
            'contenu' => $request->input('contenuMsg'),
            'photo' => $filename,
            'DatePublication' => Carbon::now(),
            'idAnnonce' => $idAnnonce,
            'id' => strval($id)]);
        $idUserConnect = strval($user->getAuthIdentifier());
        $type = $request->input('type');
        $idAnnonceArray = explode(' ', $idAnnonce);

        $messages = DB::select('SELECT * from espacediscussion where idAnnonce=? order by idMessage ASC', $idAnnonceArray);

        return view('discussionRendezVous', compact('type', 'messages', 'idUserConnect' ,'idAnnonceArray' ));

    }
}
