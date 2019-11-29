@extends('layouts.site')

@section('content')

    <h1>BILDER</h1>
    @if(count($pictures) > 0)
        @foreach($pictures as $picture)
            <div class="picdiv">
                <h3><a href="/galerie/heresy-40K/{{$picture->id}}">{{$picture->description}}</a></h3>
            </div>
        @endforeach
    @else
        <p>Keine Bilder gefunden</p>
    @endif
@endsection