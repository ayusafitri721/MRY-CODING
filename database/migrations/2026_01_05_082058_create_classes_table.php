<?php
// database/migrations/2024_01_02_000001_create_classes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('instructor');
            $table->integer('duration'); // dalam jam
            $table->decimal('price', 10, 2);
            $table->enum('level', ['beginner', 'intermediate', 'advanced']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};