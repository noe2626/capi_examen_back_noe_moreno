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
        Schema::create('user_domicilios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('domicilio');
            $table->string('numero_exterior');
            $table->string('colonia');
            $table->integer('cp');
            $table->string('ciudad');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_domicilios');
    }
};
