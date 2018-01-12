<?php namespace Agit\AgitPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitAgitpost7 extends Migration
{
    public function up()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->string('sub_category', 255);
        });
    }
    
    public function down()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->dropColumn('sub_category');
        });
    }
}
