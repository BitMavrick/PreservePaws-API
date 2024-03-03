<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    public function toArray($request)
    {
        /*
        ? For the list of the animals, I think this limited data should be good.
        ? More data can lead to more latency which is not good.
        */

        return [
            'id' => $this->id,
            'recordDate' => $this->updated_date,
            'imageUrl' => $this->image_url,
            'name' => $this->name,
            'scientificName' => $this->sci_name,
            'populationStatus' => $this->population_status,
            'category' => $this->type->category->category,
            'type' => $this->type->type,
            'EstimatedPopulation' => $this->population_count_est
        ];
    }
}
