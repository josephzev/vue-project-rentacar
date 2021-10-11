<?php namespace Joseph\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJosephVuerentacarLocations extends Migration
{
    public function up()
    {
        Schema::create('joseph_vuerentacar_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joseph_vuerentacar_locations');
    }
}
