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
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->text('identificador');
            $table->integer('codigoOrigen');
            $table->string('concepto',255);
            $table->text('descripcion')->nullable();
            $table->tinyInteger('estado')->default('0');
            $table->dateTime('fechaPuestaDisposicion',0);
            $table->tinyInteger('tipoEnvio')->default('1');
            $table->tinyInteger('vinculo')->default('1');
            $table->string('metadatoPublico',255)->nullable();
            $table->text('opcionEnvio')->default('');
            $table->unsignedBigInteger('peticion_id');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('organismo_emisor_id');

            $table->foreign('peticion_id')->references('id')->on('peticions')->onDelete('cascade');
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('organismo_emisor_id')->references('id')->on('organismo_emisors')->onDelete('cascade');

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
        Schema::dropIfExists('envios');
    }
};
