<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAthleteExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athlete_exercise', function (Blueprint $table) {
            $table->id();
            $table->integer('id_athlete');    
            $table->integer('id_exercise');
            $table->date('date_of_training');    
            $table->integer('completed')->default(1);    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('athlete_exercise');
    }
}
