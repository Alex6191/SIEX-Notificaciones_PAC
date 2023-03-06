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
        Schema::create('organismo_emisor_raizs', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',9)->unique()->default('');
            $table->string('nombre',255)->default('');
            $table->string('nif',9)->nullable();
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
        Schema::dropIfExists('organismo_emisor_raizs');
    }
};
