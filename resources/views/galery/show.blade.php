@extends('layouts.site')

@section('content')

    <h1>Einzelbild!</h1>
    <h3>{{$picture->description}}</h3>
    <small>reingestellt am {{$picture->created_at}}</small>


    {!!Form::open(['action' =>['PicturesController@destroy', $picture->id], 'method' => 'POST', 'class'=>"deletefrm"])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' =>"deletbtn"])}}
    {!!Form::close()!!}
@endsection