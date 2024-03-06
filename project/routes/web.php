<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;



// * Web routes
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/details', [WebController::class, 'details'])->name('details');

