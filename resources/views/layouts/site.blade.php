<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Paintomancy')}}</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,500&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <style>
        </style>
        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
    </head>
    <body>
        @include('inc.navbar')
        <div class="container" id="container">
            @include('inc.messages')
            @yield('content') 
        </div>
    @include('inc.footer')
    </body>
    <script>
        document.getElementById("hamburglabel").addEventListener("click", function() {
            el = document.getElementById("servicesdiv");
            foot = document.getElementsByTagName("footer");
            if(el.style.display === "none"){
                el.style.display = "block";
            }
            else{
            el.style.display = "none";
            }
            if(foot.style.display === "none"){
                foot.style.display = "block";
            }
            else{
            foot.style.display = "none";
            }
        }, false);
    </script>
    <script>
        // // Get the modal   
        function magnify($id, $picpath){
            alert($picpath)
            $modal = document.getElementById("modal"+$id);
            // Get the image and insert it inside the modal - use its "alt" text as a caption
            $img = document.getElementById("nimg"+$id);
            $modalImg = document.getElementById("mimg"+$id);
            $captionText = document.getElementById("caption"+$id);
            $modal.style.display = "block";
            alert($id);
            $modalImg.src = $picpath;
            $captionText.innerHTML = this.alt;
        }
        // Get the <span> element that closes the modal
        $span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        $span.onclick = function() {
            $modal.style.display = "none";
        }
    </script>
    <script>
        $('#unitdrpdwn').on('change',function(){
            $('#stagedrpdwn').val();
         });
    </script>
</html>