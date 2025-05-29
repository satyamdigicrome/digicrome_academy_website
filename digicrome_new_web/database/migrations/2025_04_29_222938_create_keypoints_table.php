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
        Schema::create('keypoints', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('image'); // Field for storing image path or URL
            $table->string('name'); // Field for storing the name
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); // Foreign key for courses
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key for users
            $table->timestamps(); // Created at and updated at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keypoints');
    }
};
