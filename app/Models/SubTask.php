<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTask extends Model
{
    use HasFactory;

    protected $table = 'subtasks';
    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function tarea()
    {
        return $this->belongsTo(Task::class);
    }


    
}
