<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuizInfResource extends JsonResource
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
            'id' => $this->getId(),
            'name' => $this->getName(),
            'description' => $this->getDescription(),
            'views' => $this->getViews(),
            'submissions' => $this->getSubmissions(),
            'accepted' => $this->getAccepted(),
            'category_id' => $this->getCategoryId(),
            'subject_id' => $this->getSubjectId(),
        ];
    }
}
