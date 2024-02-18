<?php

namespace App\Models;

use App\Models\Schedule;
use App\Models\ScheduleCourse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    // relation to table students
    // public function student():HasMany{
    //     return $this->hasMany(User::class);
    // }

    // relation to table schedules
    public function schedule():HasMany{
        return $this->hasMany(Schedule::class);
    }
    
    public function scheduleCourse():HasMany{
        return $this->hasMany(ScheduleCourse::class);
    }
}
