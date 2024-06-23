<?php

use App\Http\Controllers\QuestionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('questions', QuestionsController::class);
