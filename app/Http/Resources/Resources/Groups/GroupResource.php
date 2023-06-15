<?php

namespace App\Http\Resources\Resources\Groups;

use Illuminate\Http\Resources\Json\JsonResource;

class GroupResource extends JsonResource
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
            'active' => $this->active,
            'group_code' => $this->group_code,
            'name' => $this->name,
            /* 'users_count' => $this->users_count */
        ];
    }
}
