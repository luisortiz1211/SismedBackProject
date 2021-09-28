<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalHistory extends JsonResource
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
            'patient_id'=>$this->patient_id,
            'PersonalHistory_id'=>$this->id,
            'nameCondition' => $this->nameCondition,
            'yearCondition' => $this->yearCondition,
            'commentCondition' => $this->commentCondition,
        ];
    }
}
