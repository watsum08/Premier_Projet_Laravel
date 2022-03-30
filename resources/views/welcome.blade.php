<!DOCTYPE html>
@extends('layout')

@section('content')
        <h1>Médiathèque</h1>
        @foreach($movies as $movie)
            <p> {{ $movie->titre }} - {{ $movie->annee }} </p>
        @endforeach
    </body>
</html>
@endsection