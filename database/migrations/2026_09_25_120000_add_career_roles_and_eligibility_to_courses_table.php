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
        Schema::table('courses', function (Blueprint $table) {
            // [{title, avg_salary, salary_range, experience, tag, description}, ...]
            $table->json('career_roles')->nullable()->after('about');
            // [{icon, title, description}, ...]
            $table->json('eligibility')->nullable()->after('career_roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['career_roles', 'eligibility']);
        });
    }
};
