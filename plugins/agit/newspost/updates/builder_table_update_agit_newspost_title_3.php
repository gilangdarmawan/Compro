<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitNewspostTitle3 extends Migration
{
    public function up()
    {
        Schema::table('agit_newspost_title', function($table)
        {
            $table->string('topic_id', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('agit_newspost_title', function($table)
        {
            $table->text('topic_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
