<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', fn () => view('home'));

// One line registers index, create, store, show, edit, update, destroy
Route::resource('jobs', JobController::class);
