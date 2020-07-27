<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesConferenceSessionSpeaker extends Migration
{
    public function up()
    {
        Schema::create('hmones_conference_session_speaker', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('session_id')->unsigned();
            $table->integer('speaker_id')->unsigned();
            $table->primary(['session_id','speaker_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_conference_session_speaker');
    }
}
