<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use DB;

class PicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pictures = Picture::orderBy('id', 'desc')->get();
        return view('galery.index')->with ('pictures', $pictures);
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
        //
        $this->validate($request,[
            'description' => 'required',
            'category' => 'required'
        ]);

        //create Pictue
        $picture = new Picture;
        $picture->description = $request->input('description');
        //$picture->category = $request->input('category');
        $picture->save();

        return redirect('/galerie')->with('success','Bilder erfolgreich eingefügt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            
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
        $picture = Picture::find($id);
        $picture->delete();
        return redirect('/galerie')->with ('success', 'Das Bild wurde gelöscht');
    }

    public function heresy()
    {
        //
        $pictures = Picture::orderBy('id', 'desc')->get();
        return view('galery.heresy')->with ('pictures', $pictures);  
    }
}
