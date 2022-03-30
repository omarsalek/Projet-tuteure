<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);
        $email = $request->input('email');

        return view('formulaireContact' ,compact('email'));
    }

    public function sendEmail(Request $request){
        $request->validate(['email' => 'required|email', 'subject' => 'required', 'name' => 'required', 'contents' => 'required',]);
        $data = ['subject' => $request->subject, 'name' => $request->name, 'email' => $request->email, 'contents' => $request->contents];
        Mail::send('email-template', $data, function($message) use ($data) {
            $message->to($data['email'])
                    ->subject($data['subject'])
                    ->attach(public_path('/images/logo.jpg'));});
        return redirect('MesRendezVous')->with(['message' => 'Email bien été envoyé!']);
    }

}
