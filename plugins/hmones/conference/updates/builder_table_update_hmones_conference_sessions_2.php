<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesConferenceSessions2 extends Migration
{
    public function up()
    {
        Schema::table('hmones_conference_sessions', function($table)
        {
            $table->text('facilitators')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('hmones_conference_sessions', function($table)
        {
            $table->dropColumn('facilitators');
        });
    }
}
