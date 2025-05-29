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
        Schema::table('key_points', function (Blueprint $table) {
            $table->renameColumn('email', 'image'); // Rename email to image
        });
    }

    public function down()
    {
        Schema::table('key_points', function (Blueprint $table) {
            $table->renameColumn('image', 'email'); // Revert the change
        });
    }
};
