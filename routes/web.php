<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PostController@index')->name('post.index');

// Route::get('/lists',PostCont);