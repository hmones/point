<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesConferenceSessions extends Migration
{
    public function up()
    {
        Schema::create('hmones_conference_sessions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('day_title');
            $table->text('session_header');
            $table->text('session_title');
            $table->time('from');
            $table->time('to');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_conference_sessions');
    }
}
