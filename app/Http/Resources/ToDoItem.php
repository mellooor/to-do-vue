<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ToDoItem extends JsonResource
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
            'content' => $this->content,
            'priority' => $this->priority,
            'created_at' => (Carbon::now())
                ->diffInHours($this->created_at) > 24 ? $this->created_at->format('d/m/Y') : $this->created_at->diffForHumans(),
            'updated_at' => (Carbon::now())
                ->diffInHours($this->updated_at) > 24 ? $this->updated_at->format('d/m/Y') : $this->updated_at->diffForHumans(),
        ];
    }
}
