<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class StandardModel extends Model {
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
