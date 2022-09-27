<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitionsTables extends Migration
{
    public function up()
    {
        Schema::create('exhibitions', function (Blueprint $table) {
            createDefaultTableFields($table);
            
            $table->string('title', 200)->nullable();
            $table->text('text')->nullable();
            $table->dateTime('event_date')->nullable();  
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('exhibition_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'exhibition');
        });

        Schema::create('exhibition_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'exhibition');
        });
    }

    public function down()
    {
        Schema::dropIfExists('exhibition_revisions');
        Schema::dropIfExists('exhibition_slugs');
        Schema::dropIfExists('exhibitions');
    }
}
