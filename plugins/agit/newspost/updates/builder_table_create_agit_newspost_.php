<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAgitNewspost extends Migration
{
    public function up()
    {
        Schema::create('agit_newspost_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('id', 255);
            $table->string('title_en', 255);
            $table->string('title_id', 255);
            $table->string('alias_en', 255);
            $table->string('alias_id', 255);
            $table->string('topic_id', 255);
            $table->string('created_at', 255);
            $table->string('meta_title_en', 255);
            $table->string('meta_title_id', 255);
            $table->string('meta_description_en', 255);
            $table->string('meta_description_id', 255);
            $table->string('meta_image', 255);
            $table->string('api_type', 255);
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('agit_newspost_');
    }
}
