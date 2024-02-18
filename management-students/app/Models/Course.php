<?php

namespace App\Models;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    // relation to table schedules
    public function schedule(): BelongsTo
    {
        return $this->belongsTo(ScheduleCourse::class);
    }

    public function scheduleCourse(): HasMany
    {
        return $this->hasMany(ScheduleCourse::class);
    }
}
