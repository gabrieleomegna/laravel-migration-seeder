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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('departure-station', 30);
            $table->string('arrival-station', 30);
            $table->dateTime('departure-time');
            $table->dateTime('arrival-time');
            $table->string('train-code', 20);
            $table->tinyInteger('no-carriages');
            $table->string('on-time', 3);
            $table->string('cancelled', 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
