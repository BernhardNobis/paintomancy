<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Picture;
use DB;

class GaleryController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderBy('order')->get();
        return view('galery.index')->with ('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return redirect('/galerie')->with('success','Bilder erfolgreich eingefügt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        
        $categories = Category::where('name',$name)->first();
        $pictures = Picture::where('category', $categories->name)->paginate(40);
        //return ($pictures);
        return view('galery.category')->with ('pictures', $pictures);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categories = Category::find($id);
        $picture->delete();
        return redirect('/galerie')->with ('success', 'Die Kategorie wurde Erfolgreich');
    }

   // public function heresy()
   // {
   //     //
   //     $pictures = Picture::orderBy('id', 'desc')->get();
   //     return view('galery.heresy')->with ('pictures', $pictures);  
   // }
}
