<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class projectlst extends Model
{

    use softDeletes;
    use HasFactory;
    protected $guarded = [
        'id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    public function tasks()
    {
        return $this->hasMany(tasklist::class, 'project_id');
    }
}
