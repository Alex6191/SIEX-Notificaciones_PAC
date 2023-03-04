<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nif')->unique()->default('');
            $table->string('name');
            $table->string('apellidoPaterno')->default('');
            $table->string('apellidoMaterno')->default('');
            $table->string('email');
            $table->string('telefono')->default('');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('tipo')->default(0);
            $table->text('certificado')->default('');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
