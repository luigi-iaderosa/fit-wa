<?php

namespace App\Models;

use App\Models\Traits\HasIdAsPrimaryKey;
use App\Models\Traits\HasTimestampsFalse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AthleteExercise extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_athlete_exercise';
    protected $guarded = ['id_athlete_exercise'];
    protected $table = 'athlete_exercise';
}
