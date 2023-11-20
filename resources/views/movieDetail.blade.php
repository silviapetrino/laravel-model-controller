@extends('layouts.main');



{{-- movie detail  --}}
@section('content')

<div class="card m-2" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <p class="card-text"><span>Release date: </span>{{ $movie->date }}</p>
      <p class="card-text"><span>Original title: </span> {{ $movie->original_title }}</p>
      <p class="card-text"><span>Nationality: </span> {{ $movie->nationality }}</p>
      <p class="card-text"><span>Vote: </span>{{ $movie->vote }}</p>
    </div>
  </div>


  @endsection
