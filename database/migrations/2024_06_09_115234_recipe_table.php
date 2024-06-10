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
        Schema::create('recipe', function (Blueprint $table) {
            $table->mediumInteger('recipe_id')->nullable(false)->primary();
            $table->string('recipe_name', 60);
            $table->string('image_url', 255);
            $table->text('ingredients');
            $table->text('cooking_directions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('recipe');
    }
};
