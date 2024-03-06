<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\AnimalCollection;
use App\Models\Animal;

class WebController extends Controller
{
    public function index() {
        $animals = Animal::orderBy('population_count_est', 'asc')->take(11)->get();

        View()->share('animals', $animals);
        return view('index');
    }
}
