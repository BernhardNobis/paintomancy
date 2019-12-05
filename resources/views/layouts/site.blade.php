<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Paintomancy')}}</title>

        <!-- Fonts -->
        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,400&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <style>
        </style>
        <!-- Scripts -->
        
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content') 
        </div>
    @include('inc.footer')
    </body>
    <script>
        $(document).ready(function() {
            document.getElementById("galerychecklabel").addEventListener("click",myFunction)
        });
        
        function myFunction() {
            alert("1");
                document.getElementById("galerysubnav").id = "galeryshow";
            alert("2");
        };
    </script>
    <!--<script>
        window.onclick = function(event) {
            if (!event.target.matches('.galeryoption-item')) {
                var dropdowns = document.getElementsByClassName("galeryoption-item");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display ='block') {
                        openDropdown.style.display ='hidden';
                    }
                }
            }
        }
    </script>    -->
</html>