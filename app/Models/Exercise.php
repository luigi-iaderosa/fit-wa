<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $table = 'exercise';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    
    public function discipline(){
        return $this->hasOne(Discipline::class,'id','id_discipline');
    }
    
    
    
}
