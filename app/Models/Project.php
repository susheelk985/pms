<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function timeEntries()
    {
        return $this->hasMany(TimeEntry::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}
