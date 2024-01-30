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
            $table->string('client_code')->unique();
            $table->string('client_name');
            $table->string('contact_person');
            $table->text('address');
            $table->string('contact_number');
            $table->string('email')->unique();
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
