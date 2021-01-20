
@extends('layouts.main')

@section('content')
    <h1> Car Shop </h1>

    <h2> Cars </h2>
    <ul>
        @foreach ($cars as $car)
            <li>
                <h3>
                    {{ $car->modello}}
                </h3>
                <div>{{ $car->marca}} </div>
                <div>{{ $car->targa}} </div>
            </li>
        @endforeach
    </ul>

    <!-- Logica VUEJS -->
    <section id="app">
        <h2>Bikes</h2>
        <ul>
            <li v-for="bike in bikes">
                <h3>@{{bike.modello}}</h3>
                <div class="brand">
                    @{{bike.marca}}
                </div>
                <div class="plate">
                    @{{bike.targa}}
                </div>
                <div class="power">
                    @{{bike.cavalli}}
                </div>            
            </li>        
        </ul>
    </section>
@endsection