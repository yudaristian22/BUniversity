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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap', 255);
            $table->string('namapanggilan', 255);
            $table->string('email', 255);
            $table->string('nomor_hp', 255);
            $table->string('jalur', 255);
            $table->text('image');
            $table->string('programstudi_1', 255);
            $table->string('programstudi_2', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
