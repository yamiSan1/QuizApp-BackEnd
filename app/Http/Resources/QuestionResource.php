<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'question' => $this->getQuestion(),
            'choices' => ChoiceResource::collection($this->getChoices()),
            'correct_choice' => new ChoiceResource($this->getCorrectChoice()),
        ];
    }
}
