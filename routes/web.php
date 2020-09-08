<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio');

Route::view('/authors', 'authors');

Route::resource('contacts', 'ContactController');
