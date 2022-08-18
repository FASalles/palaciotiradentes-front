<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTables extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            createDefaultTableFields($table);
            
            $table->string('title', 200)->nullable();
            $table->text('link')->nullable();
            $table->text('text')->nullable();
            $table->integer('position')->unsigned()->nullable();
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('video_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'video');
        });

        Schema::create('video_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'video');
        });
    }

    public function down()
    {
        Schema::dropIfExists('video_revisions');
        Schema::dropIfExists('video_slugs');
        Schema::dropIfExists('videos');
    }
}
