<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTables extends Migration
{
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable(); 
            $table->text('text')->nullable();         
            $table->integer('position')->unsigned()->nullable();
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('publication_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'publication');
        });

        Schema::create('publication_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'publication');
        });
    }

    public function down()
    {
        Schema::dropIfExists('publication_revisions');
        Schema::dropIfExists('publication_slugs');
        Schema::dropIfExists('publications');
    }
}
