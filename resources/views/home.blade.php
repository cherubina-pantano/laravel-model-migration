
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
@endsection