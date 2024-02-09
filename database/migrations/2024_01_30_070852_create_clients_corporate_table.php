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
        Schema::create('clients_corporate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_person_id');
            $table->string('code');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('color_legend')->nullable();

            // * Address
            $table->string('house_number');
            $table->string('barangay_district');
            $table->string('city_municipality');
            $table->string('province_region');
            $table->string('country');

            $table->string('industry');
            $table->string('email');
            $table->string('contact_number');
            $table->string('website')->nullable();
            $table->json('socmed_platforms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients_corporate');
    }
};
