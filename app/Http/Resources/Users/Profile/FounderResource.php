<?php

namespace App\Http\Resources\Users\Profile;

use Illuminate\Http\Resources\Json\JsonResource;

class FounderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
