<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class DetailedAnimalResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'recordDate' => $this->updated_date,
            'imageUrl' => $this->image_url,
            'name' => $this->name,
            'scientificName' => $this->sci_name,
            'populationStatus' => $this->population_status,
            'category' => $this->type->category->category,
            'type' => $this->type->type,
            'EstimatedPopulation' => $this->population_count_est,
            'animalFact' => $this->animal_fact,
            'habitat' => $this->habitat,
            'threatFactors' => $this->threat_factors,
            'conservationEfforts' => $this->conservation_efforts
        ];
    }
}