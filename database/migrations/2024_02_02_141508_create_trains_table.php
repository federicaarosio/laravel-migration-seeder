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

            $table->string('agency', 60);
            $table->string('departure_station', 60);
            $table->string('arrival_station', 60);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->integer('train_code');
            $table->integer('wagon_number');
            $table->boolean('on_time');
            $table->boolean('deleted');
            
            $table->boolean('cancelled');

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
