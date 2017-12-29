<?php namespace Agit\AgitPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitAgitpost2 extends Migration
{
    public function up()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->string('category');
            $table->string('icon');
            $table->date('post_date');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('agit_agitpost_', function($table)
        {
            $table->dropColumn('category');
            $table->dropColumn('icon');
            $table->dropColumn('post_date');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
