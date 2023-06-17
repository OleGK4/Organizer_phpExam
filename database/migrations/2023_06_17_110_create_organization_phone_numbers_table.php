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
        Schema::create('organization_phone_numbers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->foreignId('phone_number_id');
            $table->foreign('phone_number_id')->references('id')->on('phone_numbers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization_phone_numbers');
    }
};
