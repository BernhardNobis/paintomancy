@extends('layouts.site')

@section ('content')
    <div class="greyspacediv">
        <div class="whitespacediv">
            <div class="contactinfodiv">
                <h2>Bei Interesse an unseren Projekten kannst du dich gerne an uns wenden</h2>
            </div>
            <div class="formdiv">
                {!! Form::open(['action' => ('MailsController@sendmail'),'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="namediv">
                    <div class="namelabeldiv contactlabel">
                        {{Form::label('name', 'Name',['class'=>'namelabel'])}}
                    </div>
                    <div class="namefielddiv contactfielddiv">
                        {{Form::text('name', '',['class' => 'namefield contactfield','id'=>'namefield', 'placeholder' => 'Name, Nachname', 'autocomplete'=>'on'])}}
                    </div>
                </div>
                <div class="maildiv">
                    <div class="maillabeldiv contactlabel">
                        {{Form::label('mail', 'E-Mail-Adresse',['class'=>'maillabel'])}}
                    </div>
                    <div class="mailfielddiv contactfielddiv">
                        {{Form::email('mail', '',['class' => 'mailfield contactfield', 'id'=>'mailfield', 'placeholder' => 'Max.Musterman@web.de', 'autocomplete'=>'on'])}}
                    </div>
                </div>
                <div class="messagediv">
                    <div class="messagelabeldiv contactlabel">
                        {{Form::label('msg', 'Nachricht',['class'=>'messagelabel'])}}
                    </div>
                    <div class="messagefielddiv contactfielddiv">
                        {{Form::textarea('msg', '', ['class' => 'messagefield contactfield','id'=>'messagefield', 'placeholder' => ''])}}
                    </div>
                </div>
                <div class="privacydiv">
                    {{Form::checkbox('privacycheck', 'accepted', false ,['class'=>'privacycheck'])}}
                    <br>
                    <label class="privacylabel">Ich habe die <a class="privacylink" href="#">Datenschutzerklärung</a> zur Kenntnis genommen und erkläre mich damit einverstanden.</label>
                    <small class="small">(Pflichtfeld)</small>
                </div>
                <div class="submitdiv">
                    {{Form::submit('Absenden', ['class'=>'submitbtn', 'id'=>'submitbtn'])}}
                    <!--<button class="submitbtn" type="submit" onclick="sendMail(); return False">Absenden</button>-->
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection