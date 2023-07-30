<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
//            $table->string('guest_id')->nullable();
            $table->string('fullNameGuest')->nullable();
            $table->string('socialNameGuest')->nullable();
            $table->string('birthDateGuest')->nullable();
            $table->string('disability')->nullable();
            $table->string('tipeOfDisability')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
};
