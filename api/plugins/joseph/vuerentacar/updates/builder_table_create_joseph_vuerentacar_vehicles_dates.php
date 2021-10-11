<?php namespace Joseph\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJosephVuerentacarVehiclesDates extends Migration
{
    public function up()
    {
        Schema::create('joseph_vuerentacar_vehicles_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('vehicle_id');
            $table->integer('date_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joseph_vuerentacar_vehicles_dates');
    }
}
