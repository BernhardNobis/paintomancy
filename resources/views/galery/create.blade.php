@extends('layouts.site')

@section('content')

    <h1>CREATE</h1>
    {!! Form::open(['action' => 'PicturesController@store' , 'method' => 'POST', 'files' => true]) !!}
        <div class='creatediv'>
            <div class="covercheckdiv">
                {{Form::checkbox('covercheck', 'coverimage')}}
            </div>
            <div>
                {{Form::file('image')}}
            </div>
            <div class="descriptiondiv">
                {{Form::label('description', 'Beschreibung')}}
                {{Form::text('description','',['class' => 'descriptiontextfield', 'placeholder' => 'Beschreibung'])}}
            </div>
            <div class="categorydiv">
                {{Form::select('category', ['heresy' => 'Heresy', '40K' => '40K', 'aos' => 'Age of Sigmar', 'bloodbowl' => 'Blood Bowl', 'infinity' => 'Infinity the Game', 'wyrd' => 'Wyrd Games', 'brettspiele' => 'Brettspiele', 'andere' => 'Andere'], null, ['class' => 'drpdwn', 'placeholder' => 'Welche Kategorie?'])}}
            </div>
        </div>
        <div>
            {{Form::submit('Speichern',['class' => 'savebtn btn'])}} 
        </div>
    {!! Form::close() !!}
@endsection