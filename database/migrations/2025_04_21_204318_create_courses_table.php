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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku')->nullable();
            $table->string('tag_line')->nullable();
            $table->string('corporate')->nullable();
            $table->text('description')->nullable();
            $table->string('key10')->nullable();
            $table->string('key9')->nullable();
            $table->string('key8')->nullable();
            $table->string('key7')->nullable();
            $table->string('key6')->nullable();
            $table->string('key5')->nullable();
            $table->string('key4')->nullable();
            $table->string('key3')->nullable();
            $table->string('key2')->nullable();
            $table->string('key1')->nullable();
            $table->boolean('course_free')->default(0);
            $table->boolean('course_upcoming')->default(0);
            $table->boolean('course_online_payment')->default(1);
            $table->string('course_duration')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('dubai_price', 10, 2)->default(0);
            $table->decimal('us_price', 10, 2)->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('has_faqs')->default(0);
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
