<?php

namespace Database\Seeders;

use App\Models\Discipline;
use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExercisesFeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->runStep1();
    }
    
    
    private function runStep1(){
        $swimming = Discipline::where('name','=','swimming')->first();
        if ($swimming){
            Exercise::create([
                'name'=>'crawl complete',
                'single_shot_measure'=>2,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            Exercise::create([
                'name'=>'backstroke complete',
                'single_shot_measure'=>2,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            Exercise::create([
                'name'=>'backstroke slide',
                'single_shot_measure'=>4,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            Exercise::create([
                'name'=>'backstroke legs only/arms straight/ w poolbuoy',
                'single_shot_measure'=>4,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            
            Exercise::create([
                'name'=>'backstroke legs only/arms straight/ w poolbuoy',
                'single_shot_measure'=>4,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            Exercise::create([
                'name'=>'backstroke complete',
                'single_shot_measure'=>4,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            
            Exercise::create([
                'name'=>'breaststroke complete',
                'single_shot_measure'=>4,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            
            Exercise::create([
                'name'=>'breaststroke complete',
                'single_shot_measure'=>2,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            
            Exercise::create([
                'name'=>'breaststroke legs only / w kickboard',
                'single_shot_measure'=>4,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            Exercise::create([
                'name'=>'breaststroke arms only / w pool buoy',
                'single_shot_measure'=>4,
                'repetitions'=>1,
                'measure_unit'=>'pools',
                'effort_scale'=>null,
                'id_discipline'=> $swimming->id,
            ]);
            
            
            
        }
        else {
            
        }
    }
}
