@extends('layouts.site')

@section('content')

    
    <div class="allcategories">
        <div class="categoryinfodiv">
            <h3>Abgeschlossene Projekte zu den unterschiedlichsten Herstellern im Bereich Tabletop und Brettspiel.</h3>
        </div>
        @foreach($categories as $category)
        <div class="category {{$category->name}}">
            <div class="categorylinkdiv {{$category->name}}linkdiv">
                <h2><a class="{{$category->name}}link" href="/galerie/{{$category->name}}">{{$category->name}}</a></h2>
            </div>
            <div class="categorypicdiv {{$category->name}}picdiv">
                <a  href="/galerie/{{$category->name}}"><img class="categorypic {{$category->name}}pic" src="images\mainimages\{{$category->name}}.jpg"></a>
            </div>
        </div>
        <hr>
        @endforeach
        <!--
        <div class="category heresy">
            <div class="categorylinkdiv heresylinkdiv">
                <h2><a class="heresylink" href="/galerie/heresy-40K">Warhammer 40.000/Horus Häresie</a></h2>
            </div>
            <div class="categorypicdiv heresypicdiv">
                <a  href="/galerie/heresy-40K"><img class="categorypic heresypic" src="images\mainimages\heresy.jpg"></a>
            </div>
        </div>
        <hr>
        <div class="category aos">
            <div class="categorylinkdiv aoslinkdiv">
                <h2><a class="aoslink" href="/galerie/aos">Age of Sigmar!</a></h2>
            </div>
            <div class="categorypicdiv aospicdiv">
                <a href="/galerie/aos"><img class="categorypic aospic" src="images\mainimages\aos.png"></a>
            </div>
        </div>
        <hr>
        <div class="category bloodbowl">
            <div class="categorylinkdiv bloodbowllinkdiv">
                <h2><a class="bloodbowllink" href="/galerie/bloodbowl">Blood Bowl</a></h2>
            </div>
            <div class="categorypicdiv bloodbowlpicdiv">
                <a href="/galerie/bloodbowl"><img class="categorypic bloodbowlpic" src="images\mainimages\bloodbowl.png"></a>
            </div>
        </div>
        <hr>
        <div class="category infinity">
            <div class="categorylinkdiv infinitylinkdiv">
                <h2><a class="infinitylink" href="/galerie/infinity">Infinity the Game</a></h2>
            </div>
            <div class="categorypicdiv infinitypicdiv">
                <a href="/galerie/infinity"><img class="categorypic infinitypic" src="images\mainimages\infinity.png"></a>
            </div>
        </div>
        <hr>
        <div class="category wyrd">
            <div class="categorylinkdiv wyrdlinkdiv">
                <h2><a class="wyrdlink" href="/galerie/wyrd">Wyrdgames</a></h2>
            </div>
            <div class="categorypicdiv wyrdpicdiv">
                <a href="/galerie/wyrd"><img class="categorypic wyrdpic" src="images\mainimages\wyrd.png"></a>
            </div>
        </div>
        <hr>
        <div class="category board">
            <div class="categorylinkdiv boardlinkdiv">
                <h2><a class="boardlink" href="/galerie/board">Brettspiele</a></h2>
            </div>
            <div class="categorypicdiv boardpicdiv">
                <a href="/galerie/board"><img class="categorypic boardpic" src="images\mainimages\board.jpg"></a>
            </div>
        </div>
        <hr>
        <div class="category other">
            <div class="categorylinkdiv otherlinkdiv">
                <h2><a class="otherlink" href="/galerie/other">Andere</a></h2>
            </div>
            <div class="categorypicdiv otherpicdiv">
                <a href="/galerie/other"><img class="categorypic otherpic" src="images\mainimages\other.jpg"></a>
            </div>
        </div>
        -->
    </div>
@endsection