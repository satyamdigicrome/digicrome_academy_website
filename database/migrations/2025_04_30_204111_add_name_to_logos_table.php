<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('logos', function (Blueprint $table) {
            $table->string('name')->after('id'); // Add the name field after the id field
        });
    }

    public function down()
    {
        Schema::table('logos', function (Blueprint $table) {
            $table->dropColumn('name'); // Drop the name field if rolling back
        });
    }
};
