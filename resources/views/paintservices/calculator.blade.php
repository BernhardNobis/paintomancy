@extends('layouts.site')

@section('content')

<h1>DER KALKULATOR IST NOCH IN ARBEIT</h1>
<h1>{{$mainsystem->system}}</h1>
    <div class="storediv">
        <section class="calculatordiv">
            <div class="calculatormaindiv">
                <div class="calculatorstagespicdiv">
                        <img id="stage5pic" class="stagepic" src="../images/stages/stage5.png" alt="Stage5">
                </div>
                <div class="calculatornotpicdiv">
                    <div class="calculatortextdiv">
                        <div class="calculatorsystemdiv">
                        </div>
                        <div class="calculatorpricediv">
                            <div class="calculatormainpricediv">
                            </div>
                            <div class="calculatorpriceinfodiv">
                            </div>
                        </div>
                        <div class="infodiv">
                            <div class="unitinfodiv">
                            </div>
                            <div class="specialinfodiv">
                            </div>
                        </div>
                    </div>
                    <div class="calculatordropdowndiv">
                           {{-- {!! Form::open(['action' => ('unbenanntefunction'),'method' => 'post', 'enctype' => 'multipart/form-data'])!!} --}}
                        {{Form::open()}}
                        <div class="calculatorcategorydiv">
                                {{Form::label('unittype', 'Einheitentyp')}}
                                {!! Form::select( 'unit_id' ,$unittypes,null,['id'=>'unitdrpdwn', 'class' => 'drpdwn']) !!}
                        </div>
                        <div class="calculatorstagediv">
                            {{Form::label('stage', 'Qualität')}}
                            {{Form::select('stage', ['stage1' => 'Stage 1', 'stage2' => 'Stage 2', 'stage3' => 'Stage 3', 'stage4' => 'Stage 4', 'stage5' => 'Stage 5'], null, ['id'=>'stagedrpdwn','class' => 'drpdwn', 'placeholder' => 'Wähle eine Qualität aus'])}}
                        </div>
                        <div class="calculatorbasediv">
                            {{Form::label('basetype', 'Basequalität')}}
                            {{Form::select('base', ['standardbase' => 'Standard', 'hqbase' => 'High-Quality'], null, ['id'=>'bastetypedrpdwn','class' => 'drpdwn', 'placeholder' => 'Wie soll die Base sein?'])}}
                        </div>
                        <div class="calculatorcraftdiv">
                                {{Form::label('crafttype', 'Zusammenbau')}}
                                {{Form::select('crafttype', ['no' => 'Kein Zusammenbau', 'standardcraft' => 'Standard', 'hqcraft' => 'High Quality'], null, ['id'=>'crafttypedrpdwn','class' => 'drpdwn', 'placeholder' => 'Wähle eine Option'])}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('inc.othersystems')
        <h1>TEST</h1>
    </div>

@endsection