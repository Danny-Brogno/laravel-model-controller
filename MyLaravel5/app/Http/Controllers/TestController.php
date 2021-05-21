<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Movie;

// -----------------------------------------------------------------------------

class TestController extends Controller {
  // QUI SI RITORNA SEMPRE QUALCOSA CHE STA DENTRO PAGES, MAI LE COSE CHE STANNO DENTRO LAYOUTS O COMPONENTS

  public function home() {

    $movies = Movie::all();
    // dd($movies);
    return view("pages.home", compact("movies") );

  } // END OF HOME FUNCTION

  public function film($id) {
    // MI ricopio tuttoi il database
    $movies = Movie::all();
    // dd($movies);
    // mi seleziono solo l`elemento attivo
    $movier_active = $movies[$id];
    // visulizzo
    // dd($movier_active);

    return view("pages.film", compact("movier_active"));

  } // END OF FILM FUNCTION


}

// -----------------------------------------------------------------------------
