<?php

namespace App\Http\Resources;
use App\Patient;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DrugAllergiesCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'data' => $this->collection,
            'links' => [
                //'patient' => '/api/patients/' . $this->patient_id,
            ],
        ];
    }
}
