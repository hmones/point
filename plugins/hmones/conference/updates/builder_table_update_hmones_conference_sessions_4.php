<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesConferenceSessions4 extends Migration
{
    public function up()
    {
        Schema::table('hmones_conference_sessions', function($table)
        {
            $table->dropColumn('day_title');
        });
    }
    
    public function down()
    {
        Schema::table('hmones_conference_sessions', function($table)
        {
            $table->text('day_title');
        });
    }
}
