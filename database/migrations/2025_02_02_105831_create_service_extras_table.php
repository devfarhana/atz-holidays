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
        Schema::create('service_extras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('our_services')->onDelete('cascade');
            $table->string('first_title')->nullable();
            $table->string('first_details')->nullable();
            $table->string('second_title')->nullable();
            $table->string('second_details')->nullable();
            $table->string('third_title')->nullable();
            $table->string('third_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_extras');
    }
};
