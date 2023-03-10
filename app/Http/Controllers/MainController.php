<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Tag;

class MainController extends Controller
{
  // HOME PAGE
  public function home()
  {
    $genres = Genre::orderBy('created_at', 'DESC')->get();

    return view('home', compact('genres'));
  }

  // MOVIE PAGE
  public function movie()
  {
    $movies = Movie::orderBy('created_at', 'DESC')->get();

    return view('movie', compact('movies'));
  }

  // CREATE PAGE
  public function create()
  {

    $genres = Genre::orderBy('created_at', 'DESC')->get();
    ;

    $tags = Tag::orderBy('created_at', 'DESC')->get();
    ;

    return view(
      'create',
      compact('genres', 'tags')
    );
  }

  // STORE MOVIE
  public function store(Request $request)
  {
    $data = $request->validate([
      'name' => 'required|string|max:64',
      'year' => 'required|date_format:Y',
      'cashOut' => 'required|integer',
      'genre_id' => 'required|integer',
      'tags' => 'required|array'
    ]);

    $movie = Movie::make($data);
    $genre = Genre::find($data['genre_id']);

    $movie->genre()->associate($genre);
    $movie->save();

    $tags = Tag::find($data['tags']);
    $movie->tags()->attach($tags);

    return redirect()->route('home');
  }

  // EDIT MOVIE
  public function edit(Movie $movie)
  {
    return view('edit', compact('movie'));
  }

  // UPDATE MOVIE
  public function update(Request $request, Movie $movie)
  {

    $data = $request->validate([
      'name' => 'required|string|max:64',
      'year' => 'required|date_format:Y',
      'cashOut' => 'required|integer',
    ]);

    $movie->update($data);
    $movie->save();

    return redirect()->route('home', $movie);
  }

  // DELETE MOVIE
  public function delete(Movie $movie)
  {
    $movie->delete();

    return redirect()->route('home');
  }
}