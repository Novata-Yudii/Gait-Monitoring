<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('doctorId');
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->float('height');
            $table->float('weight');
            $table->string('MCU');
            $table->integer('measurement');
            $table->string('timer');
            $table->string('speed');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
