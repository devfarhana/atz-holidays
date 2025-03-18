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
        Schema::create('package_tour_hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_tour_id')->constrained('package_tours')->onDelete('cascade');
            $table->string('hotel_name')->nullable();
            $table->string('location')->nullable();
            $table->text('details')->nullable();
            $table->string('image')->nullable();
            $table->string('rating')->nullable();
            $table->string('number_review')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_tour_hotels');
    }
};
