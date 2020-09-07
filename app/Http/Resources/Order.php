<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'employee' => $this->employee,
            'orderitems' => $this->orderitems,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
