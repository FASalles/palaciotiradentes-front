<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClippingsTables extends Migration
{
    public function up()
    {
        Schema::create('clippings', function (Blueprint $table) {
            createDefaultTableFields($table);
            
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('text')->nullable();
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('clipping_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'clipping');
        });

        Schema::create('clipping_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'clipping');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clipping_revisions');
        Schema::dropIfExists('clipping_slugs');
        Schema::dropIfExists('clippings');
    }
}
