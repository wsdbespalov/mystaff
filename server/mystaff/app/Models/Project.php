<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Task;


class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    protected $attributes = [
        'title' => '',
        'description' => ''
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
