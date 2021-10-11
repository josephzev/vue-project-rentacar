<?php namespace Joseph\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJosephVuerentacarVehicles5 extends Migration
{
    public function up()
    {
        Schema::table('joseph_vuerentacar_vehicles', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title', 191)->default('null')->change();
            $table->string('slug', 191)->default('null')->change();
            $table->text('description')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('joseph_vuerentacar_vehicles', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->string('title', 191)->default('\'null\'')->change();
            $table->string('slug', 191)->default('\'null\'')->change();
            $table->text('description')->default('NULL')->change();
        });
    }
}
