<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $email
 * @property mixed $full_name
 * @property mixed $experience
 * @property mixed $image
 * @property mixed $average_salary
 * @property mixed $updated_at
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'email' => $this->email,
            'full_name' => $this->full_name,
            'experience' => $this->experience,
            'image' => $this->image,
            'average_salary' => $this->average_salary,
            'updated_at' => $this->updated_at,
        ];
    }
}
