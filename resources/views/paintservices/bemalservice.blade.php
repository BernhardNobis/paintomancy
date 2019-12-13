@extends('layouts.site')

@section('content')

    <div class="paintservicediv">
        <section class="paintserviceinfodiv">
            <div class=paintserviceinfoheadlinediv>
                <h1 class="paintserviceinfoheadline">Bemalung im Stage-system</h1>
            </div>
            <div class="paintserviceinfotextdiv">
                <p class="paintserviceinfotext">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                    sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                </p>
            </div>
        </section>
        <section class="stagesdiv">
            @for ($i = 1; $i <6 ; $i++)
                <div class="stagediv stage{{$i}}div">
                    <div class="stagepicdiv stage{{$i}}picdiv">
                        <img id="stage{{$i}}pic" class="stagepic" src="../images/stages/stage{{$i}}.png" alt="Stage{{$i}}">
                    </div>
                    <div class="stagetext stage{{$i}}text">
                        @if($i==1)
                            <p>Erster text</p>
                        @endif
                        @if($i==2)
                            <p>Zweiter text</p>
                        @endif
                        @if($i==3)
                            <p>Dritter text</p>
                        @endif
                        @if($i==4)
                            <p>Vierter text</p>
                        @endif
                        @if($i==5)
                            <p>Finaler text</p>
                        @endif
                    </div>
                </div>
            @endfor
        </section>
        <section class="extraservicediv">
            <div class="basediv">
                <div class="basepicdiv">
                        <img class="basepic" src="../images/bases/base1.png" alt="Base1">
                </div>
                <div class="basetextdiv">
                    <p class="basetext">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p> 
                </div>
            </div>
            <div class="craftdiv">
                <div class="craftheadlinediv">
                    <h4 class="craftheadline">Zusammenbau</h4>
                </div>
                <div class="crafttextdiv">
                    <p class="craftext">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At 
                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                </div>
        </section>
    </div>

@endsection