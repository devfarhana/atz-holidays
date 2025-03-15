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
        Schema::create('hajj_package_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hajj_packages_id')->constrained('hajj_packages')->onDelete('cascade');
            $table->string('video')->nullable();
            $table->string('video_url')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hajj_package_videos');
    }
};
