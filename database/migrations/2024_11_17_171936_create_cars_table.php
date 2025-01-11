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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('year');
            $table->string('transmission')->nullable();
            $table->string('body_type')->nullable();
            $table->string('make')->nullable();
            $table->string('condition')->nullable();
            $table->string('model');
            $table->string('price');
            $table->string('description')->nullable();
            $table->string('speed')->nullable();
            $table->string('engine')->nullable();
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
