<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Paintomancy')}}</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <style>
        </style>
        <!-- Scripts -->
        <script>
        $(document).ready(function(){
	        $('#nav-icon1').click(function(){
		        $(this).toggleClass('open');
	        });
        });
        </script>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content') 
        </div>
    @include('inc.footer')
    </body>
</html>