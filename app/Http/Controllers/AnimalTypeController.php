<?php

namespace App\Http\Controllers;

use App\Models\AnimalType;
use App\Http\Requests\StoreAnimalTypeRequest;
use App\Http\Requests\UpdateAnimalTypeRequest;

class AnimalTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnimalTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimalTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnimalType  $animalType
     * @return \Illuminate\Http\Response
     */
    public function show(AnimalType $animalType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnimalType  $animalType
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimalType $animalType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimalTypeRequest  $request
     * @param  \App\Models\AnimalType  $animalType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimalTypeRequest $request, AnimalType $animalType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnimalType  $animalType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimalType $animalType)
    {
        //
    }
}
