<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function viewTraining(Request $request,$id){
        $athlete = Athlete::find($id);
        
        $training = $athlete->exercises()->withPivot(['date_of_training','completed'])->get();
        return view('training.training-view',['athlete'=>$athlete,'items'=>$training]);
        
        
    }
}
