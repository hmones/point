<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesConferenceVideos extends Migration
{
    public function up()
    {
        Schema::create('hmones_conference_videos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('link');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('header')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_conference_videos');
    }
}
