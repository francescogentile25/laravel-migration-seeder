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

    <main>
        <div class="container">
            <h1>Treni in partenza</h1>
            @forelse ($trains as $train)
                <ul class="list-group w-50
                my-4">
                    <li class="list-group-item">{{ $train->agency }}</li>
                    <li class="list-group-item"> Da: {{ $train->departure_station }}</li>
                    <li class="list-group-item">A: {{ $train->arrival_station }}</li>
                    <li class="list-group-item"> Orario partenza: {{ $train->departure_time }}</li>
                    <li class="list-group-item">Orario arrivo: {{ $train->arrival_time }}</li>
                    <li class="list-group-item">Numero Treno: {{ $train->train_number }}</li>
                    <li class="list-group-item">Numero Carrozze: {{ $train->number_carriages }}</li>
                    <li class="list-group-item"> In orario: {{ $train->in_time ? 'si' : 'no' }}</li>
                    <li class="list-group-item"> Cancellato: {{ $train->deleted ? 'si' : 'no' }}</li>
                </ul>

            @empty
            @endforelse
        </div>
    </main>

</body>

</html>
