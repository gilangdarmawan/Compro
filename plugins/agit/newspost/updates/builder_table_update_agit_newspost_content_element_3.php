<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitNewspostContentElement3 extends Migration
{
    public function up()
    {
        Schema::table('agit_newspost_content_element', function($table)
        {
            $table->integer('news_id');
        });
    }
    
    public function down()
    {
        Schema::table('agit_newspost_content_element', function($table)
        {
            $table->dropColumn('news_id');
        });
    }
}
