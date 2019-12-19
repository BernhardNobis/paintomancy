<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unittype;
use App\System;
use App\Stage;
use App\Basetypes;
use App\Crafttypes;
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
            //Unittypes
            $unittypes = $mainsystem->unittype;
            $unittypes =  collect($unittypes->toArray())->pluck(['unittype'])->all();

            //Stages
            $stages = Stage::select('stage')->get();
            $stages = collect($stages->toArray())->pluck(['stage'])->all();

            //basetypes
            $basetypes = Basetypes::select('basetype')->get();
            $basetypes = collect($basetypes->toArray())->pluck(['basetype'])->all();

            //crafttypes
            $crafttypes = Crafttypes::select('crafttype')->get();
            $crafttypes = collect($crafttypes->toArray())->pluck(['crafttype'])->all();

        return view('paintservices.calculator')->with('mainsystem',$mainsystem)->with('systems',$restsystems)->with('unittypes', $unittypes)->with('stages',$stages)->with('basetypes',$basetypes)->with('crafttypes',$crafttypes);
    }
}
