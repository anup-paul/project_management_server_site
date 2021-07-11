<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'project_id' => $this->project_id,
            'task_name' => $this->task_name,
            'slug' => $this->slug,
            'task_description' => $this->task_description,
            'task_assign_to' => $this->task_assign_to,
            'task_start_date' => $this->task_start_date,
            'task_end_date' => $this->task_end_date,
            'deleted_at'=>$this->deleted_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
