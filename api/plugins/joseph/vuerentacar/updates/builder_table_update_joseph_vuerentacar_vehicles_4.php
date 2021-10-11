<?php namespace Joseph\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJosephVuerentacarVehicles4 extends Migration
{
    public function up()
    {
        Schema::table('joseph_vuerentacar_vehicles', function($table)
        {
            $table->string('title', 191)->default('null')->change();
            $table->string('slug', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->renameColumn('availbale', 'available');
        });
    }
    
    public function down()
    {
        Schema::table('joseph_vuerentacar_vehicles', function($table)
        {
            $table->string('title', 191)->default('\'null\'')->change();
            $table->string('slug', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
            $table->renameColumn('available', 'availbale');
        });
    }
}
