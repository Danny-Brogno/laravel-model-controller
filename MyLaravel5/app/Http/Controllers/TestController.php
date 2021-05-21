<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Movie;

// -----------------------------------------------------------------------------

class TestController extends Controller {
  // QUI SI RITORNA SEMPRE QUALCOSA CHE STA DENTRO PAGES, MAI LE COSE CHE STANNO DENTRO LAYOUTS O COMPONENTS

  public function home() {

    $movies = Movies::all();
    dd($movies);
    // return view("pages.home");

  } // END OF HOME FUNCTION

}

// -----------------------------------------------------------------------------
