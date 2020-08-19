<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('books', 'API\\BooksController')->except(['create', 'show', 'create']);
Route::resource('authors', 'API\\AuthorsController')->except(['create', 'show', 'create']);
Route::resource('genrers', 'API\\GenrersController')->except(['create', 'show', 'create']);
Route::resource('publishers', 'API\\PublishersController')->except(['create', 'show', 'create']);
