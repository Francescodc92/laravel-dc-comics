@extends('layouts.app')

@section('page-title', 'home')


@section('main-content')
<div class="container py-3">
  <div class="row row-gap-3">
    @foreach ($comics as $comic)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100">
          <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ Str::limit($comic->description, 200)}}</p>
            <p class="card-text text-primary fw-bold">Prezzo: {{ $comic->price }}€</p>
            <a href="{{ route('main-show', ['comic' => $comic->id]) }}" class="btn btn-primary">Dettagli</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection