<?php
namespace App\Providers\AppSpecific;

use App\Services\Athlete\AddAthleteService;
use App\Services\Athlete\GetAthletesService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
class AthleteServiceProvider extends ServiceProvider {
    public function register (){
        $this->app->bind(AddAthleteService::class , function(){
            return new AddAthleteService(app(Request::class));
        });
        
        
        $this->app->bind(GetAthletesService::class , function(){
            return new GetAthletesService(app(Request::class));
        });
        
    }
}
