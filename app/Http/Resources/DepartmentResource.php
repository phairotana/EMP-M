<?php

namespace App\Http\Resources;

use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
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
            'title' => $this->title,
            'detail' => $this->detail,
            'created_at'    => Carbon::parse($this->created_at)->format('d-m-Y H:i A'),
            'updated_at' => Carbon::parse($this->updated_at)->format('d-m-Y H:i A'),
          ];
    }
}
