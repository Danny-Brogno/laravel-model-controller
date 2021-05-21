<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('pages/home', 'TestController@home');

Route:: get('pages/film/{id}', 'TestController@film') -> name("singleFilm");
