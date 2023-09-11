@extends('layouts.main')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="card p-3 m-2" style="width: 18rem;">
                <img src="https://www.stateofmind.it/wp-content/uploads/2014/12/Cinema_Fotolia_59441801_Subscription_Monthly_M_-_KRAKEN.jpg.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie->title }}</h5>
                  <p class="card-text"> Original title: {{ $movie->original_title }}</p>
                  <h6> Date: {{ $movie->date }}</h6>
                  <h6>Vote: {{ $movie->vote }}</h6>
                  <a href="#" class="btn btn-primary">More Info</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection