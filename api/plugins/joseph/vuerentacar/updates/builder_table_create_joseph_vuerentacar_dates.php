<?php namespace Joseph\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJosephVuerentacarDates extends Migration
{
    public function up()
    {
        Schema::create('joseph_vuerentacar_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('pickup');
            $table->dateTime('drop_off');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joseph_vuerentacar_dates');
    }
}
