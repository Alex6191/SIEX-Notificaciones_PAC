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
        Schema::create('anexos', function (Blueprint $table) {
            $table->id();
            $table->boolean('anexoReferencia');
            $table->boolean('anexoUrl');
            $table->text('nombre')->default('');
            $table->text('mimeType')->default('');
            $table->binary('referenciaDocumento');
            $table->text('enlaceDocumento')->default('');
            $table->string('codigoRespuesta',4)->default('');
            $table->text('descripcionRespuesta')->default('');
            $table->text('opcionConsultaAnexo')->default('');
            $table->text('opcionRespuestaConsultaAnexo')->default('');
            $table->unsignedBigInteger('peticion_acceso_id');

            $table->foreign('peticion_acceso_id')->references('id')->on('peticion_accesos')->onDelete('cascade');

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
        Schema::dropIfExists('anexos');
    }
};
