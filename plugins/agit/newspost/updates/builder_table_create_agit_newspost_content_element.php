<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAgitNewspostContentElement extends Migration
{
    public function up()
    {
        Schema::create('agit_newspost_content_element', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('content_id', 255);
            $table->text('title_content_id');
            $table->text('title_content_en');
            $table->text('description_content_id');
            $table->text('description_content_en');
            $table->text('image_content');
            $table->integer('image_width');
            $table->text('type_content');
            $table->text('api_type');
            $table->integer('precedence_content');
            $table->primary(['content_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('agit_newspost_content_element');
    }
}
