<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectListResource extends JsonResource
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
            'project_name' => $this->project_name,
            'slug' => $this->slug,
            'project_description' => $this->project_description,
            'assign_to' => $this->assign_to,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'deleted_at'=>$this->deleted_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'tasks' => $this->tasks
        ];
    }
}
