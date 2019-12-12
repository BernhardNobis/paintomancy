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

    //public function galerie(){
    //    return view('pages.galerie');
    //}
}
