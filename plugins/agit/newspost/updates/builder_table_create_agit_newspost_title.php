<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAgitNewspostTitle extends Migration
{
    public function up()
    {
        Schema::create('agit_newspost_title', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('agit_newspost_title');
    }
}
