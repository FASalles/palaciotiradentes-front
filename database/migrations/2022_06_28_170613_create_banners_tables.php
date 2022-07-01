<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTables extends Migration
{
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();
            $table->text('text')->nullable();
            $table->string('text_color', 10)->nullable();
            $table->string('button_text', 200)->nullable();
            $table->string('button_link', 500)->nullable();
            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('banner_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'banner');
        });
    }

    public function down()
    {
        Schema::dropIfExists('banner_revisions');
        Schema::dropIfExists('banners');
    }
}