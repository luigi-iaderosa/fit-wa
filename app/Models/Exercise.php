<?php

namespace App\Models;

use App\Models\Traits\HasIdAsPrimaryKey;
use App\Models\Traits\HasTimestampsFalse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    use HasTimestampsFalse;
    use HasIdAsPrimaryKey;
    protected $table = 'excercise';
}
