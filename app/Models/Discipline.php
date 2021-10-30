<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasTimestampsFalse;
use App\Models\Traits\HasIdAsPrimaryKey;
class Discipline extends Model
{
    use HasFactory;
    protected $table = 'discipline';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    
}
