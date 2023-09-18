@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                {{ $comic->title }}
            </h1>
        </div>
    </div>



        <div class="card  mb-3">
        <div class="row g-0">
            <div class="col-md-4 ">
            <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-8">
                <div class="card-body ">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text fw-bold">
                        <div class="">
                            serie: {{ $comic->series }}
                        </div>
                    </p>
                    <p class="fw-bold text-primary">
                        Prezzo{{ $comic->price }}€
                    </p>
                    <p class="fw-bold text-primary">
                        data di vendita 
                        {{  date('d/m/Y', strtotime($comic->sale_date))}}
                    </p>
                    <p class="fw-bold">
                        Tipo di articolo:
                        {{ $comic->type }}
                    </p>
                    <p class="fw-bold">
                        <span class="fw-bold text-danger">
                            Artisti:
                        </span>
                        {{ $comic->artists }}
                    </p>
                    <p  class="fw-bold">
                        <span class="fw-bold text-danger">
                            Scrittori:
                        </span>
                        {{ $comic->writers }}
                    </p>
                    <p>
                        {{ $comic->description }}
                    </p>
                    <div class="actions-container">
                        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning mt-2">
                            Modifica
                        </a>
                        <form 
                          action="{{ route('comics.destroy', ['comic'=>  $comic->id]) }}"
                          method="POST"
                          class="d-inline-block mt-2"
                          onsubmit="return confirm('Sei sicuro di voler cancellare questo elemento?');"
                        >
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger mt-2">
                              Elimina
                          </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

</div>
@endsection
