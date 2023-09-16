@extends('layouts.app')

@section('page-title', 'home')


@section('main-content')
<div class="container">
    <div class="col-12 mb-4">
        <a href="{{ route('comics.create') }}" class="btn btn-success w-100">
            + Aggiungi
        </a>
    </div>

    <div class="row">
      <div class="col-12">
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Titolo</th>
                      <th scope="col">Prezzo</th>
                      <th scope="col">Serie</th>
                      <th scope="col">Azioni</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($comics as $comic)
                      <tr>
                          <th scope="row">{{ $comic->id }}</th>
                          <td>{{ $comic->title }}</td>
                          <td>{{ $comic->price }} €</td>
                          <td>{{ $comic->series }}</td>
                          <td>
                              <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                                  Vedi
                              </a>
                              <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">
                                  Modifica
                              </a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
    </div>
</div>
@endsection