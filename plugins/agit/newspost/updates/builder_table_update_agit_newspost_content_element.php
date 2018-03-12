<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitNewspostContentElement extends Migration
{
    public function up()
    {
        Schema::table('agit_newspost_content_element', function($table)
        {
            $table->increments('content_id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('agit_newspost_content_element', function($table)
        {
            $table->integer('content_id')->change();
        });
    }
}
