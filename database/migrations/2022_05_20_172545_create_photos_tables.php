<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTables extends Migration
{
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();
            $table->text('credits')->nullable();
            $table->text('text')->nullable();
            $table->integer('position')->unsigned()->nullable();
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('photo_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'photo');
        });

        Schema::create('photo_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'photo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('photo_revisions');
        Schema::dropIfExists('photo_slugs');
        Schema::dropIfExists('photos');
    }
}
