<?php 
namespace App\Services\Athlete;

use App\Models\Athlete;
use App\Services\BasicInjectableService;

class GetAthletesService extends BasicInjectableService {
    
    public function getAthletes(){
        return Athlete::orderBy('id','desc')->paginate(15);
    }
    
}
