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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100)->nullable();
            $table->binary('contenido')->nullable();
            $table->text('mimeType')->nullable();
            $table->text('metadato')->nullable();
            $table->text('enlaceDocumento')->nullable();
            $table->binary('referenciaDocumento')->nullable();
            $table->binary('referenciaPdfAcuse')->nullable();
            $table->text('csvResguardo')->nullable();
            $table->unsignedBigInteger('hash_documento_id')->unique();
            $table->unsignedBigInteger('peticion_acceso_id');

            $table->foreign('hash_documento_id')->references('id')->on('hash_documentos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('documentos');
    }
};
