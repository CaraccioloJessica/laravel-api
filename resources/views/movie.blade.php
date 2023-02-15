@extends('layout.main-layout')

@section('content')    
  <h1>Lista movies</h1>
    <ul>
      @foreach ($movies as $movie)
        <li class="my-3">
          Nome: {{ $movie -> name }} <br>
          Anno: {{ $movie -> year }} <br>
          Incassi: {{ $movie -> cashOut }} &dollar;
        </li>
      @endforeach
    </ul>
@endsection