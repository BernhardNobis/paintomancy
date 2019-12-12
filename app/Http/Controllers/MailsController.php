<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\Danke;
use App\Post;
use Datetime;

class Mailscontroller extends Controller
{
    public function kontakt(){
        return view('pages.kontakt');
    }

    public function sendmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mail'=> 'required',
            'msg'=>'required',
            'privacycheck' => 'required',
            ]);

            $name = $request->input('name');
            $mail = $request->input('mail');
            $msg = $request->input('msg');
            $date = new Datetime();
            $now = $date->format ('H:i');
            $date = $date->format ('d.m.Y');



            \Mail::to($mail)->send(new Danke($mail, $name, $msg, $date, $now));
            return redirect('/kontakt')->with('success', 'Deine Nachricht wurde abgeschickt! Du erhälst eine Email zur Bestaetigung :3');
    }
}
