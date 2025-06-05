<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function subtareas()
    {
        return $this->hasMany(SubTask::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categorie::class);
    }
}
