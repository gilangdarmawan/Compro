<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitNewspost2 extends Migration
{
    public function up()
    {
        Schema::table('agit_newspost_', function($table)
        {
            $table->string('news_id', 255);
            $table->increments('id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('agit_newspost_', function($table)
        {
            $table->dropColumn('news_id');
            $table->string('id', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
