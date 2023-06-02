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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("description");
            $table->year("release_year");
            $table->string("maturity_rating");
            $table->integer("number_of_seasons");
            $table->enum("type", ["TV_SHOW", "MOVIE"]);
            $table->string("poster_url");
            $table->string("jumbotron_image_url")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
};
