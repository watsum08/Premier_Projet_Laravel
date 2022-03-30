@extends('layout')

@section('content')
<h2>Ajouter un nouveau film</h2>
<form action="/addfilm" method="post">
    {{ csrf_field() }}
    <div>
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" placeholder="film title" value="{{ old('title') }}">
        @if($errors->has('title'))
            {{ $errors->first('title') }}
        @endif
    </div>
    <div>
        <label for="year">Année</label>
        <input type="text" id="year" name="year" placeholder="year of the film" value="{{ old('year') }}">
        @if($errors->has('year'))
            {{ $errors->first('year') }}
        @endif
    </div>
    <input type="submit" value="Enregistrer">
</form>
@endsection