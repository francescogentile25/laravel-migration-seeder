@extends('layouts.app')
@section('content')
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
@endsection
