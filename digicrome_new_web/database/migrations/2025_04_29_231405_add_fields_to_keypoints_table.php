<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('key_points', function (Blueprint $table) {
            $table->string('name')->after('id'); // Add name field
            $table->string('email')->after('name'); // Add email field
            $table->foreignId('user_id')->constrained()->after('email')->onDelete('cascade'); // Add user_id field
            $table->foreignId('course_id')->constrained()->after('user_id')->onDelete('cascade'); // Add course_id field
        });
    }

    public function down()
    {
        Schema::table('key_points', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Drop foreign key for user_id
            $table->dropForeign(['course_id']); // Drop foreign key for course_id
            $table->dropColumn(['name', 'email', 'user_id', 'course_id']); // Drop the added columns
        });
    }
};
