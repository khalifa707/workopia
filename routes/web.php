<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', [JobController::class, 'index']);

Route::get('/jobs/create', function () {
    return view('jobs.create');
})->name('jobs.create');
