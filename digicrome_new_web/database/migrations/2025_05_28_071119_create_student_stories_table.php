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
    Schema::create('student_stories', function (Blueprint $table) {
        $table->id();
        $table->string('studentname');
        $table->string('position');
        $table->string('companyname'); // corrected spelling
        $table->text('stoire'); // assuming it's a story/narrative
        $table->string('image')->nullable(); // image file path
        $table->unsignedBigInteger('userid');
        $table->timestamps();

        // Optional: Add foreign key constraint if 'users' table exists
        $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_stories');
    }
};
