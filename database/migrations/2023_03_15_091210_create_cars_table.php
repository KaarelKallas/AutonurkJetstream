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
            $table->timestamps();
            $table->string('make');
            $table->string('model');
            $table->string('body');
            $table->string('engine');
            $table->string('engine_size');
            $table->string('power');
            $table->string('gearbox');
            $table->string('fuel');
            $table->string('drive');
            $table->string('year');
            $table->string('mileage');
            $table->string('color');
            $table->string('plate');
            $table->string('VIN');
            $table->string('price');
            $table->boolean('used');
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
