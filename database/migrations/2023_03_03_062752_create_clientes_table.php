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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nif')->unique()->default('');
            $table->string('nombre')->default('');
            $table->string('apellidoPaterno')->default('');
            $table->string('apellidoMaterno')->default('');
            $table->string('email')->default('');
            $table->string('telefono')->default('');
            
            $table->unsignedBigInteger('licencia_id')->unique();
            
            $table->foreign('licencia_id')
                ->references('id')
                ->on('licencias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('clientes');
    }
};
