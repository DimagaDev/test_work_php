<?php

use App\Http\Api\BookController;
use Illuminate\Support\Facades\Route;


Route::resource('books', BookController::class);

