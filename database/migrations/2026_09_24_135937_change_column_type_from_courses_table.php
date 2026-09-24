<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Convert with SQL so the migration does not depend on Doctrine DBAL
        // or Laravel's schema-diff support for the active database driver.
        $driver = DB::connection()->getDriverName();
        if ($driver === 'mysql') {
            DB::statement('ALTER TABLE courses MODIFY price VARCHAR(255) NULL, MODIFY dubai_price VARCHAR(255) NULL, MODIFY us_price VARCHAR(255) NULL, MODIFY singapore_price VARCHAR(255) NULL, MODIFY discount VARCHAR(255) NULL');
            return;
        }

        Schema::table('courses', function (Blueprint $table) {
            $table->string('price')->nullable()->change();
            $table->string('dubai_price')->nullable()->change();
            $table->string('us_price')->nullable()->change();
            $table->string('singapore_price')->nullable()->change();
            $table->string('discount')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->default(0)->change();
            $table->decimal('dubai_price', 10, 2)->default(0)->change();
            $table->decimal('us_price', 10, 2)->default(0)->change();
            $table->decimal('singapore_price', 10, 2)->default(0)->change();
            $table->decimal('discount', 10, 2)->default(0)->change();
        });
    }
};
