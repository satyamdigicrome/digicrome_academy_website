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
    Schema::create('testimonials', function (Blueprint $table) {
        $table->id();
        $table->string('tagline');
        $table->text('review');
        $table->tinyInteger('rating'); // out of 5
        $table->string('name');
        $table->string('profession');
        $table->unsignedBigInteger('user_id')->nullable();
        $table->string('image')->nullable(); // image path
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
