<?php

use App\Http\Controllers\Api\V1\AnimalController;
// use App\Http\Controllers\Api\V1\CategoryeController;
// use App\Http\Controllers\Api\V1\TypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// * Defaults route implemented already -------------------------

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//* Api version: 1 --------------------------------------------

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    Route::apiResource('animals', AnimalController::class);
});
