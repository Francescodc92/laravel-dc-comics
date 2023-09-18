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
            <input 
              type="text" 
              maxlength="64"
              class="form-control @error('title') is-invalid @enderror"
              id="title" 
              name="title" 
              placeholder="Enter title..." 
              value="{{ old('title') }}"  
              required
            >
            @error('title')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="thumb" class="form-label">Img link</label>
            <input 
              type="text" 
              maxlength="2048" 
              class="form-control @error('thumb') is-invalid @enderror" 
              id="thumb" 
              name="thumb"
              value="{{ old('thumb') }}"
              placeholder="Enter value..."
            >
            @error('thumb')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div>
            @enderror
          </div>

          <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input 
                type="number" 
                min="0.01" 
                max="100" 
                step="0.01" 
                class="form-control @error('price') is-invalid @enderror" 
                id="price" 
                name="price" 
                value="{{ old('price') }}"
                placeholder="Enter value..." 
                required
              >
              @error('price')
                <div class="alert alert-danger my-2">
                    {{ $message }}
                </div>
              @enderror 
          </div>

          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input 
              type="text" 
              maxlength="100" 
              class="form-control @error('series') is-invalid @enderror" 
              id="series" 
              name="series"
              value="{{ old('series') }}"
              placeholder="Enter value..." 
              required
            >
            @error('series')
              <div class="alert alert-danger my-2">
                  {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input 
              type="date" 
              class="form-control @error('sale_date') is-invalid @enderror" 
              id="sale_date" 
              name="sale_date"
              value="{{ old('sale_date') }}"
              placeholder="Enter value..." 
              required
            >
            @error('sale_date')
              <div class="alert alert-danger my-2">
                  {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input 
              type="text" 
              maxlength="100" 
              class="form-control @error('type') is-invalid @enderror" 
              id="type" 
              name="type"
              value="{{ old('type') }}"
              placeholder="Enter value..." 
              required
            >
            @error('type')
              <div class="alert alert-danger my-2">
                  {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="artists" class="form-label">lista artisti</label>
            <input 
              type="text" 
              maxlength="255" 
              class="form-control @error('artists') is-invalid @enderror" 
              id="artists" 
              name="artists"
              value="{{ old('artists') }}"
              placeholder="Enter value..." 
              required
            >
            @error('artists')
              <div class="alert alert-danger my-2">
                  {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="writers" class="form-label">Lista scrittori</label>
            <input 
              type="text" 
              maxlength="255" 
              class="form-control @error('writers') is-invalid @enderror" 
              id="writers" 
              name="writers" 
              value="{{ old('writers') }}"
              placeholder="Enter value..." 
              required
            >
            @error('writers')
              <div class="alert alert-danger my-2">
                  {{ $message }}
              </div>
            @enderror
          </div>


          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>

          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
</div>
@endsection