<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weight_progress', function (Blueprint $table) {
            $table->id();
            $table->integer('is_first_measurement')->default(0);
            $table->date('measurement_date');
            $table->integer('id_athlete');
            $table->float('amount');
            $table->string('measure_unit',10)->default('kilograms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weight_progress');
    }
}
