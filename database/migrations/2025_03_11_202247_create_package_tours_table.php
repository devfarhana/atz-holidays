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
        Schema::create('package_tours', function (Blueprint $table) {
            $table->id();
            $table->string('package_name')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('price')->nullable();
            $table->string('duration')->nullable();
            $table->string('start_point')->nullable();
            $table->string('end_point')->nullable();
            $table->string('route')->nullable();
            $table->string('holiday_theme')->nullable();
            $table->string('offer')->nullable();
            $table->longText('map_url')->nullable();
            $table->boolean('hot_deal')->default(false);
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('category_id')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_tours');
    }
};
