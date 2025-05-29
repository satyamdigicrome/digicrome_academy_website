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
    Schema::create('blogs', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id')->nullable();
        $table->string('author_name');
        $table->string('author_image')->nullable();
        $table->string('heading');
        $table->string('tagline')->nullable();
        $table->longText('blog');
        $table->string('blog_image')->nullable();
        $table->text('meta_keywords')->nullable();
        $table->text('meta_description')->nullable();
        $table->string('meta_title')->nullable();
        $table->string('slug')->unique();
        $table->integer('views')->default(0);
        $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
