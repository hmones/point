<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesConferenceSessions extends Migration
{
    public function up()
    {
        Schema::table('hmones_conference_sessions', function($table)
        {
            $table->dateTime('from')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dateTime('to')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('hmones_conference_sessions', function($table)
        {
            $table->time('from')->nullable(false)->unsigned(false)->default(null)->change();
            $table->time('to')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
