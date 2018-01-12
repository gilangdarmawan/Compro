<?php namespace Agit\NewsContentPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitNewscontentpost extends Migration
{
    public function up()
    {
        Schema::table('agit_newscontentpost_', function($table)
        {
            $table->date('created_at');
        });
    }
    
    public function down()
    {
        Schema::table('agit_newscontentpost_', function($table)
        {
            $table->dropColumn('created_at');
        });
    }
}
