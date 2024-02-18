<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Course;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ScheduleCourse extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function course(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, "schedule_courses", "id");
    }

    public function schedule(): BelongsToMany
    {
        return $this->belongsToMany(Schedule::class, "schedule_courses", "id", "schedule_id");
    }
}
