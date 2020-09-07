<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio');

Route::resource('contacts', 'ContactController');
