@extends('layouts.main')

@section('page-title')
MyMovies | {{ $movie->title }}
@endsection

@section('main-content')
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="card pt-3 m-auto w-50 text-center" style="width: 18rem;">
                <img src="https://www.stateofmind.it/wp-content/uploads/2014/12/Cinema_Fotolia_59441801_Subscription_Monthly_M_-_KRAKEN.jpg.webp" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie->title }}</h5>
                  <p class="card-text"> Original title: {{ $movie->original_title }}</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quasi recusandae magnam fugiat dolorum, incidunt provident consequuntur repudiandae illo architecto adipisci quisquam magni? Placeat, enim ea. Aut quam esse praesentium possimus ab pariatur aspernatur natus nihil, maxime magni. Necessitatibus magnam similique quisquam veritatis ullam vel perferendis ad, impedit delectus iure.</p>
                  <h6> Date: {{ $movie->date }}</h6>
                  <h6>Vote: {{ $movie->vote }}</h6>
                </div>
              </div>
        </div>
    </div>
@endsection