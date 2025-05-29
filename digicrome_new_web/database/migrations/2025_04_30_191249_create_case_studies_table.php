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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); // Foreign key for courses
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key for users
            $table->string('heading'); // Heading column
            $table->text('paragraph'); // Paragraph column
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
