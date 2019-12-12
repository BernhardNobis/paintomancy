@extends('layouts.site')

@section('content')

<h1>DER KALKULATOR IST NOCH IN ARBEIT</h1>
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
                        {{Form::open()}}
                        <div class="calculatorcategorydiv">
                                {{Form::label('unittype', 'Einheitentyp')}}
                                {{Form::select('unittype', ['stage1' => 'Stage 1', 'stage2' => 'Stage 2', 'stage3' => 'Stage 3', 'stage4' => 'Stage 4', 'stage5' => 'Stage 5'], null, ['class' => 'unittypedrpdwn', 'placeholder' => 'Wähle die Art des Modells'])}}
                        </div>
                        <div class="calculatorstagediv">
                            {{Form::label('stage', 'Qualität')}}
                            {{Form::select('stage', ['stage1' => 'Stage 1', 'stage2' => 'Stage 2', 'stage3' => 'Stage 3', 'stage4' => 'Stage 4', 'stage5' => 'Stage 5'], null, ['class' => 'stagedrpdwn', 'placeholder' => 'Wähle eine Qualität aus'])}}
                        </div>
                        <div class="calculatorbasediv">
                            {{Form::label('basetype', 'Basequalität')}}
                            {{Form::select('base', ['standard' => 'Standard', 'hq' => 'High-Quality'], null, ['class' => 'basetypedrpdwn', 'placeholder' => 'Wie soll die Base sein?'])}}
                        </div>
                        <div class="calculatorcraftdiv">
                                {{Form::label('crafttype', 'Zusammenbau')}}
                                {{Form::select('crafttype', ['nein' => 'Kein Zusammenbau', 'standard' => 'Standard', 'hq' => 'High Quality'], null, ['class' => 'crafttypedrpdwn', 'placeholder' => 'Wähle eine Option'])}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="othersystemsdiv">
            <div class="othersystemsheadlinediv">
            </div>
            <div class="othersystemsoptionsmaindiv">
                <div class="othersystemsinfinitydiv othersystemsoptionsdiv">
                    <div class="othersystemspicdiv">
                    </div>
                    <div class="othersystemspriceinfodiv">
                    </div>
                    <div class="othersystemslink">
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection