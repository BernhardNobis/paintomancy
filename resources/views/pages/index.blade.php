@extends('layouts.site')

@section ('content')
    <div class="mainpicdiv">
        <div class="mainopacity opacitydiv">
            <div class="mottodiv">
                <div class="mottotextdiv">
                    <h1>Paintomancy</h1>
                    <h2>Wir erwecken deine Projekte zum Leben!</h2>
                </div>
                <div class="kontaktlinkdiv">
                    <a class="kontaktlink" href="\kontakt\">
                        <span class="kontakttext">Kontakt</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=servicesdiv>
        <div class="painting service">
            <img class="paintingimg serviceimg" src="images\services\painting1.jpg">
            <div class="servicedescriptiondiv">
                <div class="servicetextdiv">
                    <h3><a href="#">Bemalung</a></h3>
                    <p><a href="#">Wir bemalen Miniaturen in verschiedenen Qualitätstufen</a></p>
                </div>
            </div>
        </div>
        <div class="freehand service">
            <img class="freehandimg serviceimg" src="images\services\freehand1.jpg">
            <div class="servicedescriptiondiv">
                <div class="servicetextdiv">
                    <h3><a href="#">Freehands</a></h3>
                    <p><a href="#">Ob einfach oder Komplex, deiner Fantasie sind keine Grenzen gesetzt.</a></p>
                </div>
            </div>
        </div>
        <div class="crafting service">
            <img class="craftingimg serviceimg" src="images\services\crafting1.jpg">
            <div class="servicedescriptiondiv">
                <div class="servicetextdiv">
                    <h3><a href="#">Aufbau</a></h3>
                    <p><a href="#">Kleinere Umbauten sind ebenfalls möglich.</a></p>
                </div>
            </div>
        </div>
        <div class="basing service">
            <img class="basingimg serviceimg" src="images\services\basing1.jpg">
            <div class="servicedescriptiondiv">
                <div class="servicetextdiv">
                    <h3><a href="#">Bases und Dioramen</a></h3>
                    <p><a href="#">Auch hier steht deiner Fantasie nichts im Weg.</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection