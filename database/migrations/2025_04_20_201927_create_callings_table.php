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
        Schema::create('callings', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->longText('desc')->nullable();
            $table->string('image-two')->nullable();
            $table->string('title-two')->nullable();
            $table->longText('desc-two')->nullable();
            $table->string('image-thre')->nullable();
            $table->string('title-thre')->nullable();
            $table->longText('desc-thre')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('callings');
    }
};
