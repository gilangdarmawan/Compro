<?php namespace Agit\AgitPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitAgitpost4 extends Migration
{
    public function up()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->string('icon', 255)->nullable()->change();
            $table->date('post_date')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->string('icon', 255)->nullable(false)->change();
            $table->date('post_date')->nullable(false)->change();
        });
    }
}
