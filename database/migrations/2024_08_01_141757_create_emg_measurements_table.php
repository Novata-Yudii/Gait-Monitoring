<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emg_measurements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->string('emg1');
            $table->string('emg2');
            $table->string('emg3');
            $table->string('emg4');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emg_measurements');
    }
};
