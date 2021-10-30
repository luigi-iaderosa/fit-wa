<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Discipline;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function getExercises(){
     
        $data = Exercise::all();
        return view('exercise.exercise-list',['items'=>$data]);
    }
    
    public function addExercise(){
        $disciplines = Discipline::all();
        return view('exercise.exercise-add',['disciplines'=>$disciplines]);
    }
    
    public function addExercisePost(Request $request){
       
        $validationOutcome = $this->validate($request,[
            'name'=>'required|max:160',
            'single_shot_measure'=>'required|integer',
            'repetitions'=>'required|integer',
            'measure_unit'=>'required|string|max:160',
            'effort_scale'=>'nullable|numeric',
        ]);
        $exercise = Exercise::create(['name'=>$request->name,
        'single_shot_measure'=>$request->single_shot_measure,
        'repetitions'=>$request->repetitions,
        'measure_unit'=>$request->measure_unit,
        'effort_scale'=>$request->effort_scale,
        'id_discipline'=>$request->id_discipline
        ]);
        $request->session()->flash('add_ok', "Excercise has been added to database: ".$exercise->id);
        return redirect('/exercises');
    }
}
