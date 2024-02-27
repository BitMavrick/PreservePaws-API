<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'recordDate' => $this->updated_date,
            'imageUrl' => $this->image_url,
            'name' => $this->name,
            'scientificName' => $this->sci_name,
            'category' => $this->type->category->category,
            'type' => $this->type->type,
        ];
    }
}
