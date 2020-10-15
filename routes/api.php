<?php

use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//job routes
Route::middleware('api')->group(function () {
    Route::get('search', [JobController::class, 'search'])->name('job.search');

    //pages api
    Route::get('company-categories', [JobController::class, 'getCategories'])->name('job.getCategories');
    Route::get('job-titles', [JobController::class, 'getAllByTitle'])->name('job.getAllByTitle');
    Route::get('companies', [JobController::class, 'getAllOrganization'])->name('job.getAllOrganization');
});
