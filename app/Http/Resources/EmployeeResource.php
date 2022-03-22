<?php

namespace App\Http\Resources;

use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
          return [
            'id' => $this->id,
            'department_id' => $this->department_id,
            'photo' => $this->photo,
            'name' => $this->name,
            'gender' => $this->gender,
            'address' => $this->detail,
            'salary_id' => $this->salary_id,
            'amount' => $this->join_date,
            'end_date' => $this->end_date,
            'date_of_birth' => $this->date_of_birth,
            'created_at'    => Carbon::parse($this->created_at)->format('d-m-Y H:i A'),
            'updated_at' => Carbon::parse($this->updated_at)->format('d-m-Y H:i A'),
          ];
    }
}
