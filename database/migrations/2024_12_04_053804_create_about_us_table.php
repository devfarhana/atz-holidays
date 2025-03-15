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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->text('description')->nullable();
            $table->string('experience_txt')->nullable();
            $table->string('year_of_experience')->nullable();
            $table->string('breadcrumb_image')->nullable();
            $table->string('about_img_1')->nullable();
            $table->string('about_img_2')->nullable();
            $table->string('about_img_3')->nullable();
            $table->string('about_img_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
