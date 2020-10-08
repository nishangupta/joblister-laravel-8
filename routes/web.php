<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PostController@index')->name('post.index');
Route::get('/job/{job}', 'App\Http\Controllers\PostController@show')->name('post.show');


//Accounts
Route::get('/account/logout', 'App\Http\Controllers\AccountController@logout')->name('account.logout');
Route::get('/account', 'App\Http\Controllers\AccountController@index')->name('account.index');
Route::get('/account/deactivate', 'App\Http\Controllers\AccountController@deactivateView')->name('account.deactivate');
Route::delete('/account/delete', 'App\Http\Controllers\AccountController@deleteAccount')->name('account.delete');

Route::get('/account/change-password', 'App\Http\Controllers\AccountController@changePasswordView')->name('account.changePassword');
Route::post('/account/change-password', 'App\Http\Controllers\AccountController@changePassword')->name('account.changePassword');
// Route::get('/lists',PostCont);