@extends('layout.layout')

@section('title', 'Home')

@section('content')

    <div class="d-flex row row-cols-4 g-3 justify-content-center align-items-center mt-3">
        {{--Stampa singola card--}}
        @forelse ($movies as $key => $movie)
            {{-- se l'array non  è vuoto--}}
                    <div>
                        <div class="card bg-dark" style="width: 18rem;">
                            <div class="col card-body">
                            <h5 class="card-title text-light text-center">{{ $movie ->title }}</h5>
                            <p class="card-text text-light text-center">{{ $movie -> original_title}}</p>
                            <p class="card-text text-light text-center">{{ $movie -> vote}}</p>
                            <a href=" {{route('movie', ['id' => $key + 1])}} " class="card-link text-warning">Vai alle info</a>
                            </div>
                        </div>
                    </div>
        @empty
            <p>Purtroppo non ci sono film da visualizzare.</p>
        @endforelse

    </div>

@endsection

