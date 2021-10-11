<?php namespace Joseph\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJosephVuerentacarDates extends Migration
{
    public function up()
    {
        Schema::table('joseph_vuerentacar_dates', function($table)
        {
            $table->date('pickup')->nullable(false)->unsigned(false)->default(null)->change();
            $table->date('drop_off')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('joseph_vuerentacar_dates', function($table)
        {
            $table->dateTime('pickup')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dateTime('drop_off')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
