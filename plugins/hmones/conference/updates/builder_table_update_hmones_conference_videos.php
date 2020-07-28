<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesConferenceVideos extends Migration
{
    public function up()
    {
        Schema::table('hmones_conference_videos', function($table)
        {
            $table->integer('order')->unsigned()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('hmones_conference_videos', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
