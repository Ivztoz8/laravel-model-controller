@extends('layout.layout')

@section('title', 'titolo del film')

@section('content')
{{--Codice per visualizzare la singola card--}}

    <div class="card bg-dark mt-3" style="width: 18rem;">
        <div class="col card-body">
            <h5 class="card-title text-light text-center">{{ $movie ->title }}</h5>
            <p class="card-text text-light text-center">{{ $movie -> original_title}}</p>
            <p class="card-text text-light text-center">{{ $movie -> nationality}}</p>
            <p class="card-text text-light text-center">{{ $movie -> date}}</p>
            <p class="card-text text-light text-center">{{ $movie -> vote}}</p>
        </div>
    </div>

@endsection