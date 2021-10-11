<?php namespace Joseph\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJosephVuerentacarReservations extends Migration
{
    public function up()
    {
        Schema::create('joseph_vuerentacar_reservations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('pickup');
            $table->date('dropoff');
            $table->integer('user_id');
            $table->integer('vehicle_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joseph_vuerentacar_reservations');
    }
}
