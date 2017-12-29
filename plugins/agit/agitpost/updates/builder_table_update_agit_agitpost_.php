<?php namespace Agit\AgitPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitAgitpost extends Migration
{
    public function up()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->dropColumn('icon');
        });
    }
    
    public function down()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->text('icon')->nullable();
        });
    }
}
