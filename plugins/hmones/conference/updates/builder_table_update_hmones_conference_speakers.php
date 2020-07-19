<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHmonesConferenceSpeakers extends Migration
{
    public function up()
    {
        Schema::table('hmones_conference_speakers', function($table)
        {
            $table->integer('year')->default(2020);
        });
    }
    
    public function down()
    {
        Schema::table('hmones_conference_speakers', function($table)
        {
            $table->dropColumn('year');
        });
    }
}
