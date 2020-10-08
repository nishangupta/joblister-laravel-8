<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/job/{job}', [PostController::class, 'show'])->name('post.show');
// Route::get('/lists',PostCont);

//Accounts
Route::get('/account/logout', [AccountController::class, 'logout'])->name('account.logout');
Route::get('/account', [AccountController::class, 'index'])->name('account.index');
Route::get('/account/deactivate', [AccountController::class, 'deactivateView'])->name('account.deactivate');
Route::delete('/account/delete', [AccountController::class, 'deleteAccount'])->name('account.delete');

Route::get('/account/change-password', [AccountController::class, 'changePasswordView'])->name('account.changePassword');
Route::put('/account/change-password', [AccountController::class, 'changePassword'])->name('account.changePassword');

Route::get('/account/my-save-list', [AccountController::class, 'saveList'])->name('account.saveList');
