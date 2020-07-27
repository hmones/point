<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesConferenceSessions3 extends Migration
{
    public function up()
    {
        Schema::table('hmones_conference_sessions', function($table)
        {
            $table->integer('day_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('hmones_conference_sessions', function($table)
        {
            $table->dropColumn('day_id');
        });
    }
}
