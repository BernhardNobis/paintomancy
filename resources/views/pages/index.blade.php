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
    <section class=servicesdiv id=servicesdiv>
        <div class="painting service">
            <div class="servicebackground">
                <img class="paintingimg serviceimg" src="images\services\painting1.jpg">
                <div class="servicedescriptiondiv">
                    <div class="servicetextdiv">
                        <h3><a href="#">Bemalung</a></h3>
                        <p><a href="#">Wir bemalen Miniaturen in verschiedenen Qualitätstufen</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="freehand service">
            <div class="servicebackground">
                <img class="freehandimg serviceimg" src="images\services\freehand1.jpg">
                <div class="servicedescriptiondiv">
                    <div class="servicetextdiv">
                        <h3><a href="#">Freehands</a></h3>
                        <p><a href="#">Ob einfach oder Komplex, deiner Fantasie sind keine Grenzen gesetzt.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="crafting service">
            <div class="servicebackground">
                <img class="craftingimg serviceimg" src="images\services\crafting1.jpg">
                <div class="servicedescriptiondiv">
                    <div class="servicetextdiv">
                        <h3><a href="#">Aufbau</a></h3>
                        <p><a href="#">Kleinere Umbauten sind ebenfalls möglich.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="basing service">
            <div class="servicebackground">
                <img class="basingimg serviceimg" src="images\services\basing1.jpg">
                <div class="servicedescriptiondiv">
                    <div class="servicetextdiv">
                        <h3><a href="#">Bases und Dioramen</a></h3>
                        <p><a href="#">Auch hier steht deiner Fantasie nichts im Weg.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="ctarow">
            <div class="ctaopacity opacitydiv">
                <div class="ctadiv">
                    <div class="cta-child">
                        <div class="ctalinkdiv ctachildlink">
                            <a  class="ctagal ctalink" href="/galerie/">Galerie</a>
                        </div>
                        <div class="ctatextdiv ctachildlink">
                            <a class="ctatext ctalink" href="/kontakt/">Was tolles gesehen? Kontaktiere uns und wir erwecken auch deine Modelle zum Leben</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection