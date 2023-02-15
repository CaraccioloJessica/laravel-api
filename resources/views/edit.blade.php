@extends('layout.main-layout')

@section('content')
    {{-- EDIT/UPDATE --}}
    <h2 class="mb-3 text-primary">Aggiorna movie</h2>
    <form method="post" action="{{ route('update', $movie ) }}" enctype="multipart/form-data">
      @csrf
      
      <label for="name" class="mt-2">Name</label>
      <input type="text" name="name" value={{ $movie -> name }}>
      <br>

      <label for="year" class="mt-2">Year</label>
      <input type="number" name="year" value={{ $movie -> year }}></input>
      <br>

      <label for="cashOut" class="mt-2">Cash out</label>
      <input type="number" name="cashOut" value={{ $movie -> cashOut }}>
      <br>

      <input type="submit" value="AGGIORNA MOVIE" class="mt-2">
    </form>
  </div>

@endsection