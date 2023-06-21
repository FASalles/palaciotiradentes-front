<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelineChaptersTables extends Migration
{
    public function up()
    {
        Schema::create('timeline_chapters', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->string('title', 200)->nullable();
            $table->text('text')->nullable();
            $table->timestamp('publish_start_date')->nullable();
            $table->integer('position')->unsigned()->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('timeline_chapters');
    }
}
