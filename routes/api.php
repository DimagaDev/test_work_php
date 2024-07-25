<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::middleware('api')->group(function () {
    Route::apiResource('books', BookController::class);
});
