<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('books', 'API\\BooksController')->except(['create', 'show', 'create']);
Route::resource('authors', 'API\\AuthorsController')->except(['create', 'show', 'create']);
Route::resource('genres', 'API\\GenrersController')->except(['create', 'show', 'create']);
Route::resource('publishes', 'API\\PublishesController')->except(['create', 'show', 'create']);
