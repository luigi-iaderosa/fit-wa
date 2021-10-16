<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Athlete\AddAthleteService;
use App\Http\Requests\Web\Athlete\AddAthleteRequest;
use App\Services\Athlete\GetAthletesService;
use Illuminate\Support\Facades\Session;

class AthleteController extends Controller
{
    
    
    public function addAthlete(Request $request){
           return view('athlete.athlete-add');
    }
    
    public function addAthletePost(Request $request, AddAthleteService $addAthleteService){
            $outcome = $addAthleteService->addAthlete();
            if ($outcome->validationErrors==null){
                $request->session()->flash('add_ok', 'A new Athlete has been added!');
                return redirect('athletes/');
            }
            else {
               
                $i=0;
                foreach ($outcome->validationErrors as $field=>$errorsOnField){
                    $request->session()->flash('add_ko', 'Validation errors:');    
                    foreach ($errorsOnField as $errorOnField){
                        $request->session()->flash('add_ko_'.$i, $field.':'.$errorOnField);    
                    }
                    $i++;
                }
                $request->session()->flash('add_ko', $i); 
                
                return redirect()->back()->withInput();
            }
    }
    
    
    public function getAthletes(Request $request, GetAthletesService $getAthletesService ){
        $outcome = $getAthletesService->getAthletes();
        return view('athlete.athlete-list',['items'=>$outcome]);
    }
    
    
}
