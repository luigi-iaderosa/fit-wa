<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Discipline;
use Illuminate\Http\Request;
use App\Services\Discipline\Validators\AddDisciplineServiceValidator;
use Illuminate\Support\Facades\Session;

class DisciplineController extends Controller
{
    public function getDisciplines(){
     
        $data = Discipline::all();
        return view('discipline.discipline-list',['items'=>$data]);
    }
    
    public function addDiscipline(){
        return view('discipline.discipline-add');
    }
    
    public function addDisciplinePost(Request $request){
       
        $validationOutcome = $this->validate($request,['name'=>'required|max:255'],['name'=>'è richiesto il nome']);
        $discipline = Discipline::create(['name'=>$request->name]);
        $request->session()->flash('add_ok', "Discipline has been added to database: ".$discipline->id);
        return redirect('/disciplines');
    }
    
    
    
    
    
}
