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
        Schema::create('user_recipe', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('recipe_id')->unsigned();
            $table->integer('rating')->unsigned();
            $table->timestamp('dateLastModified')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('user_id')->references('user_id')->on('user');
            $table->foreign('recipe_id')->references('recipe_id')->on('recipe');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('user_recipe');
    }
};
