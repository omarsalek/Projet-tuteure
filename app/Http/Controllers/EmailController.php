<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mail;

class EmailController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);
        $email = $request->input('email');

        $user = Auth::user();
        $id = $user->getAuthIdentifier();
        $iduser = explode(' ', $id);
        $emailus = DB::select('select email from users where id = ?',$iduser) ;
        $emailUser = $emailus[0]->email ;
        return view('formulaireContact' ,compact('email' , 'emailUser'));
    }

    public function sendEmail(Request $request){

        $request->validate(['email' => 'required|email', 'subject' => 'required', 'emailUser' => 'required', 'name' => 'required', 'contents' => 'required',]);
        $data = ['subject' => $request->subject, 'name' => $request->name, 'email' => $request->email, 'emailUser' => $request->emailUser,'contents' => $request->contents];
        Mail::send('email-template', $data, function($message) use ($data) {
            $message->to($data['email'])
                    ->subject($data['subject'])
                    ->attach(public_path('/images/logo.jpg'));});

        return redirect('MesRendezVous')->with(['message' => 'Email bien été envoyé!']);
    }

}
