<?php

namespace App\Models;

use App\Models\Traits\HasIdAsPrimaryKey;
use App\Models\Traits\HasTimestampsFalse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AthleteExercise extends Model
{
    use HasFactory;
    use HasTimestampsFalse;
    USE HasIdAsPrimaryKey;
    protected $table = 'athlete_exercise';
}
