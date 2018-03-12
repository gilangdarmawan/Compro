<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitNewspostTitle4 extends Migration
{
    public function up()
    {
        Schema::table('agit_newspost_title', function($table)
        {
            $table->text('news_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('agit_newspost_title', function($table)
        {
            $table->integer('news_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
