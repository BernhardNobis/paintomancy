<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;

class PagesController extends Controller
{
    public function index(){
        $title = 'Wilkommen zu Paintomancy';
        return view('pages.index')->with('title', $title);
    }

    public function paintservice(){
        return view('pages.bemalservice');
    }

    public function calculator(){
        return view('pages.kalkulator');
    }
    
}
