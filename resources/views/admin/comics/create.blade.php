@extends('layouts.app')

@section('page-title', 'Inserisci nuovo comic')


@section('main-content')
<div class="container">
  <div class="row">
    <div class="col">
        <h1>
            Crea nuovo comic
        </h1>
    </div>
  </div>

    <div class="row">
      <div class="col-12">
        <form action="{{ route('comics.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" maxlength="64" class="form-control" id="title" name="title" placeholder="Enter value..." required>
          </div>

          <div class="mb-3">
            <label for="thumb" class="form-label">Img link</label>
            <input type="text" maxlength="1024" class="form-control" id="thumb" name="thumb" placeholder="Enter value...">
          </div>

          <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" min="0.01" step="0.01" class="form-control" id="price" name="price" placeholder="Enter value..." required>
          </div>

          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" maxlength="100" class="form-control" id="series" name="series" placeholder="Enter value..." required>
          </div>

          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Enter value..." required>
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" maxlength="100" class="form-control" id="type" name="type" placeholder="Enter value..." required>
          </div>

          <div class="mb-3">
            <label for="artists" class="form-label">lista artisti</label>
            <input type="text" maxlength="255" class="form-control" id="artists" name="artists" placeholder="Enter value..." required>
          </div>

          <div class="mb-3">
            <label for="writers" class="form-label">Lista scrittori</label>
            <input type="text" maxlength="255" class="form-control" id="writers" name="writers" placeholder="Enter value..." required>
          </div>


          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</div>
@endsection