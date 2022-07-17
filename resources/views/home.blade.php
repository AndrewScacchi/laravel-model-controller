@extends('template.base')

@section('pageTitle', 'Laravel Model Controller')

@section('pageMain')
<main>
    <div class="container">
        <h1>THIS IS THE MAIN</h1>
        <div class="flexbox">
            @foreach ($movies as $movie)
                <div class="movieCard">
                    <h3> {{$movie->title}}</h3>
                    <h4>{{$movie->original_title}}</h4>
                    <span>{{$movie->nationality}}</span>
                    <span>{{$movie->date}}</span>
                    <span>{{$movie->vote}}</span>
                </div>

            @endforeach



        </div>
    </div>
</main>

@endsection
