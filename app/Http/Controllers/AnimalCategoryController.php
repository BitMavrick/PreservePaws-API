<?php

namespace App\Http\Controllers;

use App\Models\AnimalCategory;
use App\Http\Requests\StoreAnimalCategoryRequest;
use App\Http\Requests\UpdateAnimalCategoryRequest;

class AnimalCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreAnimalCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimalCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnimalCategory  $animalCategory
     * @return \Illuminate\Http\Response
     */
    public function show(AnimalCategory $animalCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnimalCategory  $animalCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimalCategory $animalCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimalCategoryRequest  $request
     * @param  \App\Models\AnimalCategory  $animalCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimalCategoryRequest $request, AnimalCategory $animalCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnimalCategory  $animalCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimalCategory $animalCategory)
    {
        //
    }
}
