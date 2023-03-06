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
        Schema::create('documento_anexos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100)->nullable();
            $table->binary('contenido')->nullable();
            $table->text('mimeType')->default('');
            $table->text('metadato')->nullable();
            $table->unsignedBigInteger('anexo_id');

            $table->foreign('anexo_id')->references('id')->on('anexos')->onDelete('cascade');

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
        Schema::dropIfExists('documento_anexos');
    }
};
