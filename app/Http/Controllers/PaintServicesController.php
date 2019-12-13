<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unittype;
use App\System;
use DB;

class PaintServicesController extends Controller
{

    public function paintservice(){
        return view('paintservices.bemalservice');
    }

    public function systemselection(){
        $systems = System::orderBy('id')->get();
        return view('paintservices.systemselection')->with('systems', $systems);
    }

    public function calculator($system){
        
            $mainsystem = System::where('system','=',$system)->first();
            $mainsystemname = $mainsystem->system;
            $chosensystem = System::where('system',$system)->get();
            $chosensystemid = $chosensystem[0]->id;
            $restsystems = System::where('id','<>',$chosensystemid)->get();

            $unittypes =['' => 'Wähle die Art des Models'] + Unittype::pluck('unittype','id')->toArray();
        return view('paintservices.calculator')->with('mainsystem',$mainsystem)->with('systems',$restsystems)->with('unittypes', $unittypes);
    }

}
