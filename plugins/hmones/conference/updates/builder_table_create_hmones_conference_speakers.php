<?php namespace Hmones\Conference\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHmonesConferenceSpeakers extends Migration
{
    public function up()
    {
        Schema::create('hmones_conference_speakers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('organization')->nullable();
            $table->string('country')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hmones_conference_speakers');
    }
}
