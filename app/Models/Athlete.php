<?php

namespace App\Models;

use App\Models\Traits\HasIdAsPrimaryKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\StandardModel;
class Athlete extends StandardModel
{
    use HasFactory;
    protected $table = 'athlete';
}
