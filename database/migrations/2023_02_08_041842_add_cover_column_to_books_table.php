<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('cover')->nullable()->after('title');
            $table->string('slug')->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            if (schema::hascolumn('books', 'slug')){
                $table->dropcolumn('slug');
            }
            if (schema::hascolumn('books', 'cover')){
                $table->dropcolumn('cover');
        }
     });
    }
};
