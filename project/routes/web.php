<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;


/*
Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', [WebController::class, 'index'])->name('index');

