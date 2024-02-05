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
            $table->string('client_code')->constrained()->cascadeOnDelete();
            $table->string('client_name');
            $table->string('client_image')->nullable();

            // * Address
            $table->string('house_number');
            $table->string('barangay_district');
            $table->string('city_municipality');
            $table->string('province_region');
            $table->string('country');

            $table->string('industry');
            $table->string('client_email')->unique();
            $table->string('client_contact_number');
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
