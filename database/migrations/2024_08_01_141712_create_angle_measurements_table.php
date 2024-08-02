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
        Schema::create('angle_measurements', function (Blueprint $table) {
            $table->id();
            $table->integer('patienId');
            $table->integer('doctorId');
            $table->string('leftHip');
            $table->string('rightHip');
            $table->string('leftKnee');
            $table->string('rightKnee');
            $table->string('leftAnkle');
            $table->string('rightAnkle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('angle_measurements');
    }
};
