<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitNewspost extends Migration
{
    public function up()
    {
        Schema::table('agit_newspost_', function($table)
        {
            $table->date('created_at')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('agit_newspost_', function($table)
        {
            $table->string('created_at', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
