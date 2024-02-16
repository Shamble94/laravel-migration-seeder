<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
 

    <div class="container">
        <div class="row">
            <h1 class="text-center m-5">Lista Treni</h1>
            @foreach ($trains as $train)
            <div class="col-12 col-md-4 col-lg-4 my-4" >
                <div class="card m-3 border-0">
                    Azienda: <h1> {{ $train->azienda }}</h1>
                    Stazione di partenza: <h4> {{ $train->departure_station}}</h4>
                    Stazione di arrivo: <h4>{{ $train->destination}}</h4>
                    Orario di partenza: <h5>{{ $train->departure_hour}}</h5>
                    Orario di arrivo <h5>{{ $train->arrival_hour}}</h5>
                    Cancellato? : <h5>{{ $train->deleted ? "Si" : "No"}}</h5>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>