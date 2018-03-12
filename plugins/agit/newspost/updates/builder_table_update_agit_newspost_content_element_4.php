<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitNewspostContentElement4 extends Migration
{
    public function up()
    {
        Schema::table('agit_newspost_content_element', function($table)
        {
            $table->text('content_id')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('news_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('agit_newspost_content_element', function($table)
        {
            $table->integer('content_id')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('news_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
