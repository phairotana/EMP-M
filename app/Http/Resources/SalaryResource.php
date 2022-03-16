<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class SalaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'salary' => $this->salary,
            'created_at'    => Carbon::parse($this->created_at)->format('d-m-Y H:i A'),
            'updated_at' => Carbon::parse($this->updated_at)->format('d-m-Y H:i A'),
        ];
    }
}
