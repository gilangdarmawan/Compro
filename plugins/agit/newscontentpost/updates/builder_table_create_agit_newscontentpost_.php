<?php namespace Agit\NewsContentPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAgitNewscontentpost extends Migration
{
    public function up()
    {
        Schema::create('agit_newscontentpost_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('title_content_id');
            $table->text('title_content_en');
            $table->text('description_content_id');
            $table->text('description_content_en');
            $table->text('image');
            $table->integer('image_width');
            $table->integer('type_content');
            $table->text('api_type');
            $table->integer('precendence');
            $table->integer('content_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('agit_newscontentpost_');
    }
}
