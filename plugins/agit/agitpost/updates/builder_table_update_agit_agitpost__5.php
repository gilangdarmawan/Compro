<?php namespace Agit\AgitPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitAgitpost5 extends Migration
{
    public function up()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->string('category', 10)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->integer('category')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
