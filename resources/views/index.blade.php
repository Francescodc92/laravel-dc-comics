@extends('layouts.app')

@section('page-title', 'home')


@section('main-content')
<h1>
  home page
</h1>

<img src="{{ Vite::asset('resources/img/gatto.jpg') }}" class="img-fluid" alt="">
@endsection