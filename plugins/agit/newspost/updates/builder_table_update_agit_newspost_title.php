<?php namespace Agit\NewsPost\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgitNewspostTitle extends Migration
{
    public function up()
    {
        Schema::table('agit_newspost_title', function($table)
        {
            $table->text('title_id');
            $table->text('title_en');
            $table->text('alias_id');
            $table->text('alias_en');
            $table->text('topic_id');
            $table->text('meta_title_id');
            $table->text('meta_title_en');
            $table->text('meta_description_id');
            $table->text('meta_description_en');
            $table->text('meta_image');
            $table->text('api_type');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('agit_newspost_title', function($table)
        {
            $table->dropColumn('title_id');
            $table->dropColumn('title_en');
            $table->dropColumn('alias_id');
            $table->dropColumn('alias_en');
            $table->dropColumn('topic_id');
            $table->dropColumn('meta_title_id');
            $table->dropColumn('meta_title_en');
            $table->dropColumn('meta_description_id');
            $table->dropColumn('meta_description_en');
            $table->dropColumn('meta_image');
            $table->dropColumn('api_type');
            $table->increments('id')->unsigned()->change();
        });
    }
}
