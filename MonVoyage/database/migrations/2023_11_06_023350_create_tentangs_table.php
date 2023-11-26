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
        Schema::create('tentangs', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('answer');
            $table->string('label1');
            $table->string('deskripsi1');
            $table->string('label2');
            $table->string('deskripsi2');
            $table->string('label3');
            $table->string('deskripsi3');
            $table->string('label4');
            $table->string('deskripsi4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentangs');
    }
};
