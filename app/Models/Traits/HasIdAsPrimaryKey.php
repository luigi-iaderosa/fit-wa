<?php
namespace App\Models\Traits;
trait HasIdAsPrimaryKey {
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    
}
