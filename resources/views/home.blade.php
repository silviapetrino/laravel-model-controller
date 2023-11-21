@extends('layouts.main')


@section('content')

    <div class="container mt-5">
        <h1>Your Movies</h1>
    </div>

    @foreach ($movies as $movie )
        <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text"><span>Release date: </span>{{ $movie->date }}</p>
                    <a href="{{ route('movieDetail', ['id' => $movie->id])}}" class="btn btn-danger">More info</a>
                </div>
            </div>
     @endforeach

@endsection
