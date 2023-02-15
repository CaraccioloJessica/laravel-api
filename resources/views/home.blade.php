@extends('layout.main-layout')

@section('content')
    
<h1>Film per genere</h1>
  @foreach ($genres as $genre)
    <h2 class="text-primary">Genere: {{ $genre -> name }}</h2>
    <ul>
      @foreach ($genre -> movies as $movie)
        <li>
          <h4 class="mt-3 text-success">Movie</h4>
          <span class="text-decoration-underline">Nome:</span> {{ $movie -> name }} <br>
          <span class="text-decoration-underline">Anno:</span> {{ $movie -> year }} <br>
          <span class="text-decoration-underline">Incassi:</span> {{ $movie -> cashOut }} &dollar;

            <div class="my-2">
              <span class="fw-bold">Tag:</span>
              @foreach ($movie -> tags as $tag)
                #{{ $tag -> name }}
              @endforeach
            </div>
        </li>
      @endforeach
    </ul>
  @endforeach

@endsection