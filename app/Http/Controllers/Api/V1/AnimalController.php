<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Animal;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Http\Controllers\Controller;


class AnimalController extends Controller
{
    public function index()
    {
        return Animal::all();
    }


    public function create()
    {
        // * Create is not important for Api [We will delete it in some point.]
    }


    public function store(StoreAnimalRequest $request)
    {
        // * Store is not important for Api [We will delete it in some point.]
    }


    public function show(Animal $animal)
    {
        return $animal;
    }


    public function edit(Animal $animal)
    {
        // * Edit is not important for Api [We will delete it in some point.]
    }


    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        // * update is not important for Api [We will delete it in some point.]
    }


    public function destroy(Animal $animal)
    {
        // * destroy is not important for Api [We will delete it in some point.]
    }
}
