@extends('layout.app')
    @section('main')

        <div class="container">
            <div class="movies">
                @foreach($movies as $key => $movie)
                    <div class="card">
                        <p><span>Title: </span><span>{{$movie['title']}}</span></p>
                        <p><span>Original title: </span><span>{{$movie['original_title']}}</span></p>
                        <p><span>Nationality: </span><span>{{$movie['nationality']}}</span></p>
                        <p><span>Date: </span><span>{{$movie['date']}}</span></p>
                        <p><span>Rating: </span><span>{{$movie['vote']}}</span></p>
                    </div>
                @endforeach
            </div>
        </div>


    @endsection
