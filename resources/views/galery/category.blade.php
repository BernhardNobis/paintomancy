@extends('layouts.site')

@section('content')

    <h1>BILDER</h1>
    @if(count($pictures) > 0)
        @foreach($pictures as $picture)
            <div class="picdiv">
                <!--<img class="galerypic" src="{{$picture->picpath}}">-->
                <!--<h4><a href="/galerie/heresy-40K/{{$picture->id}}">{{$picture->description}}</a></h4>-->
                 <!-- Trigger the Modal -->
            <img id="nimg{{$picture->id}}" onclick="magnify({{$picture->id}} ,'{{$picture->picpath}}')" class="galerypic" src="{{$picture->picpath}}" alt="{{$picture->description}}" style="width:100%;max-width:300px">

                    <!-- The Modal -->
                    <div id="modal{{$picture->id}}" class="galerymodal">

                        <!-- The Close Button -->
                        <span class="close">&times;</span>

                        <!-- Modal Content (The Image) -->
                        <img class="galerymodal-content" id="mimg{{$picture->id}}">
                        <!-- Modal Caption (Image Text) -->
                        <div id="caption{{$picture->id}}"></div>
                    </div> 
            </div>
        @endforeach
    @else
        <p>Keine Bilder gefunden</p>
    @endif
@endsection