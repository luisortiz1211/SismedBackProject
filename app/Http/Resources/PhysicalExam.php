<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhysicalExam extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'patient_id' => $this->patient_id,
            'physicalExam_id' => $this->id,
   
            'heartRate' => $this->heartRate,
            'bloodPleasure' => $this->bloodPleasure,
            'weight' => $this->weight,
            'height' => $this->height,
            'idealWeight' => $this->idealWeight,
            'temp' => $this->temp,
            'tobacco' => $this->tobacco,
            'alcohol' => $this->alcohol,
            'drugs' => $this->drugs,
            'apetiteChanges' => $this->apetiteChanges,
            'dreamChanges' => $this->dreamChanges,
            'currentCondition' => $this->currentCondition,
            'comment' => $this->comment,
            'currentDrug' => $this->currentDrug,
            'user_id' => $this->user_id,
            //los usuario son varios convertir a coleccion
        ];
    }
}
