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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->notNullable();
            $table->string('link_instagram')->notNullable();
            $table->string('link_youtube')->notNullable();
            $table->string('link_linkedin')->notNullable();
            $table->string('link_facebook')->notNullable();
            $table->string('alamat')->notNullable();
            $table->string('email')->notNullable();
            $table->string('wa')->notNullable();
            $table->string('link_gmaps')->notNullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
