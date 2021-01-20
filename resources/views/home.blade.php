
@extends('layouts.main')

@section('content')
    <!-- <h1> Car Shop </h1> -->

    <div class="container">
        <div class="card">
            <h2 class="title"> Cars </h2>
            <ul>
                @foreach ($cars as $car)
                    <li class="cards">
                        <h3>
                            {{ $car->modello}}
                        </h3>
                        <div>{{ $car->marca}} </div>
                        <div>{{ $car->targa}} </div>
                    </li>
                @endforeach
            </ul>

        </div>
       
    </div>
    

    <!-- Logica VUEJS -->
    <section id="app">
        <div class="container">
            <div class="card">
                <h2 class="title">Bikes</h2>
                <ul>
                    <li v-for="bike in bikes" class="cards">
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
            </div>           
        </div>       
    </section>
@endsection