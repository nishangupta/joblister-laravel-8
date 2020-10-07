<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PostController@index')->name('post.index');
Route::get('/job/{job}', 'App\Http\Controllers\PostController@show')->name('post.show');

// Route::get('/lists',PostCont);