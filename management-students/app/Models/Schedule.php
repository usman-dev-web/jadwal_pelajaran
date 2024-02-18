<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    // relation to table rooms
    public function room():BelongsTo{
        return $this->belongsTo(Room::class);
    }

    // relation to table courses
    public function course():BelongsToMany{
        return $this->belongsToMany(Course::class, "schedule_courses", "schedule_id", "course_id");
    }

    // public function scheduleCourse():HasMany{
    //     return $this->hasMany(ScheduleCourse::class);
    // }
}
  