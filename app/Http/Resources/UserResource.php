<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'role_id' => $this->role->name,
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'position' => $this->position,
            'phone' => $this->phone,
            'address' => $this->address,
            'company' => $this->company,
        ];
    }
}
