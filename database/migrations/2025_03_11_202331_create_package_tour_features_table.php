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
        Schema::create('package_tour_features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_tour_id'); // Ensure it matches the `packages` table
            $table->foreign('package_tour_id')->references('id')->on('package_tours')->onDelete('cascade'); // Correct FK definition
            $table->string('feature_title')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_tour_features');
    }
};
