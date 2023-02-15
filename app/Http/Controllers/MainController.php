<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\Genre;
use App\Models\Tag;

class MainController extends Controller
{
  public function home()
  {
    $genres = Genre::orderBy('created_at', 'DESC')->get();
    $tags = Tag::orderBy('created_at', 'DESC')->get();

    return view('home', compact('genres', 'tags'));
  }

  public function movie()
  {
    $movies = Movie::orderBy('created_at', 'DESC')->get();
    ;

    return view('movie', compact('movies'));
  }
}