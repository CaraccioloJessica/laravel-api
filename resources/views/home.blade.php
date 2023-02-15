@extends('layout.main-layout')

@section('content')
    
<h1>Film per genere</h1>
  @foreach ($genres as $genre)
    <h2 class="text-primary">Genere: {{ $genre -> name }}</h2>
    <ul>
      @foreach ($genre -> movies as $movie)
        <li>
          <h4>Movie</h4>
          Nome: {{ $movie -> name }} <br>
          Anno: {{ $movie -> year }} <br>
          Incassi: {{ $movie -> cashOut }} &dollar;
        </li>
      @endforeach
    </ul>
  @endforeach

@endsection