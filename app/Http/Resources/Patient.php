<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\ScheduleDay;
use App\PhysicalExam;
use App\Http\Resources\PersonalHistory as PersonalHistoryResource;
use App\ImageRecipie;
use App\Http\Resources\ImageRecipie as ImageRecipieResource;
use App\Http\Resources\ImageRecipieCollection;
use App\Http\Resources\ExplorationPatient as ExplorationPatientResource;

class Patient extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'patient_id' => $this->id,
            'ci' => $this->ci,
            'name' => $this->name,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'sex' => $this->sex,
            'civilStatus' => $this->civilStatus,
            'birthay' => $this->birthay,
            'employment' => $this->employment,
            'movil' => $this->movil,
            'landline' => $this->landline,
            'address' => $this->address,
            'nationality' => $this->nationality,
            'city' => $this->city,
            'parish' => $this->parish,
            'user_id'=>$this->user_id,
            'physicalExam_id'=>$this->physicalExam_id,
        ];
    }
}
