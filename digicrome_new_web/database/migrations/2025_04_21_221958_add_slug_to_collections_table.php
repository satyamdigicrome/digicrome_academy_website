<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class AddSlugToCollectionsTable extends Migration
{
    public function up()
    {
        // Add slug to collections table
        Schema::table('collections', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name')->nullable();
        });

        // Update existing records with slugs for collections
        $collections = \App\Models\Collection::all();
        foreach ($collections as $collection) {
            if (empty($collection->slug)) {
                $collection->slug = Str::slug($collection->name);
                $collection->save();
            }
        }
    }

    public function down()
    {
        // Remove slug from collections table
        Schema::table('collections', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}