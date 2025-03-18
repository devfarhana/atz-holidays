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
        Schema::create('banner_images', function (Blueprint $table) {
            $table->id();
            $table->string('about_banner')->nullable();
            $table->string('team_banner')->nullable();
            $table->string('hajj_banner')->nullable();
            $table->string('package_banner')->nullable();
            $table->string('blog_banner')->nullable();
            $table->string('contact_banner')->nullable();
            $table->string('faq_banner')->nullable();
            $table->string('privacy_banner')->nullable();
            $table->string('terms_banner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_images');
    }
};
