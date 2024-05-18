<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css?v=').time()}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css?v=').time()}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedan+SC&display=swap" rel="stylesheet">
    <!-- Styles -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="antialiased" id="indexbody">

    <nav class="navbar navbar-expand-lg navbar-light bg-aqua shadow">
        <div class="container">
            <div class="navbar-brand">
                <h1 class="text-center" id="header">Students Dashboard.</h1>
                
            </div>
            <div id="clock"></div>
        </div>
    </nav>
    <br> <br> <br>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card" style="width: auto;">
               
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
                <div class="card mt-3" style="width: auto;">
               
                    <div class="card-body">
                        @yield('content2')
                    </div>
                </div>

                <div class="card mt-3" style="width: auto;">
               
               <div class="card-body">
                   @yield('content3')
               </div>
           </div>
            </div>
            <div class="col-4">
            <figure class="card "style="width: auto; background-image: url('{{ asset('necro-back.jpg') }}');">
            <img class="block my-2 border border-dark border-2 rounded-circle" src="{{ asset('christ.jpg') }}"  alt="Christ" />
    <figcaption>Christ Charl Gabales</figcaption>
</figure>


            <figure class="card "style="width: auto; background-image: url('{{ asset('necro-back.jpg') }}');">
            <img class="block my-2 border border-dark border-2 rounded-circle" src="{{ asset('marde.jpg') }}"  alt="Marde" />
    <figcaption>Centmarde Campado</figcaption>
</figure>


            <figure class="card "style="width: auto; background-image: url('{{ asset('necro-back.jpg') }}');">
            <img class="block my-2 border border-dark border-2 rounded-circle" src="{{ asset('junkay.jpeg') }}"  alt="Kayel" />
    <figcaption>Jun Kyle Gulay</figcaption>
</figure>
                <div class="card mt-3" style="width: auto;">
                    <div class="card-body">
                        <div class="row mb-2">
                            <h5 class="text-center mb-3" >technology used</h5>
                            <div class="col text-center"><img src="{{ asset('jdbc.jpg') }}" width="100%" height="70rem"></div>
                            <div class="col text-center"><img src="{{ asset('laravel.png') }}" width="100%" height="70rem"></div>
                            <div class="col text-center"><img src="{{ asset('PHP-logo.svg.png') }}" width="100%" height="50rem"></div>
                            <div class="col text-center"><img src="{{ asset('mysql-6.svg') }}" width="100%" height="70rem"></div>
                        </div>

                    </div>
                    
                </div>
                <div class="d-grid gap-2 col-12 mx-auto mb-5">
                        <a type="button" href="http://rmilaravel.test/" class="mt-3 btn btn-outline-light">Go Back</a>
                    </div>

            </div>
        </div>
       <br><br><br>
       <!--  <script src="{{ asset('js/app.js').time()}}"></script> -->
       <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            var timeString = hours + ":" + minutes + ":" + seconds;
            document.getElementById("clock").innerHTML = timeString;
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</body>

</html>