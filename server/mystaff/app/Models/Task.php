<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Project;
use App\Models\TaskSession;


class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'predicted_estimation',
        'real_estimation',
        'url',
        'git',
        'status'
    ];

    protected $attributes = [
        'title' => '',
        'description' => '',
        'predicted_estimation' => 0,
        'real_estimation' => 0,
        'url' => '',
        'git' => '',
        'status' => 'closed'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function task_sessions()
    {
        return $this->belongsToMany(TaskSession::class);
    }
}
