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
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn([
                'key1',
                'key2',
                'key3',
                'key4',
                'key5',
                'key6',
                'key7',
                'key8',
                'key9',
                'key10',
                'deleted_at',
            ]);
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('key1')->nullable();
            $table->string('key2')->nullable();
            $table->string('key3')->nullable();
            $table->string('key4')->nullable();
            $table->string('key5')->nullable();
            $table->string('key6')->nullable();
            $table->string('key7')->nullable();
            $table->string('key8')->nullable();
            $table->string('key9')->nullable();
            $table->string('key10')->nullable();
            $table->timestamp('deleted_at')->nullable(); // If you want to restore the deleted_at column
        });
    }
};
