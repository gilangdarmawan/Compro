<?php namespace Agit\AgitPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAgitAgitpost extends Migration
{
    public function up()
    {
        Schema::create('agit_agitpost_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('desc')->nullable();
            $table->text('icon')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('agit_agitpost_');
    }
}
