<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('aparts', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('image'); // Field for image
            $table->string('heading'); // Field for heading
            $table->string('tagline'); // Field for tagline
            $table->text('paragraph'); // Field for paragraph
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); // Foreign key for course
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key for user
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aparts');
    }
};
