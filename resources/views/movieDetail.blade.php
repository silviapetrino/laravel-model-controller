@extends('layouts.main');



{{-- movie detail  --}}
@section('content')

<div class="card m-2" style="width: 18rem;">
    <img src="" class="card-img-top" alt="{{ $movie->title }}">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <p class="card-text">{{ $movie->date }}</p>
      <p class="card-text">Original title: {{ $movie->original_title }}</p>
      <p class="card-text">Nationality: {{ $movie->nationality }}</p>
      <p class="card-text">Vote: {{ $movie->vote }}</p>
    </div>
  </div>


  @endsection
