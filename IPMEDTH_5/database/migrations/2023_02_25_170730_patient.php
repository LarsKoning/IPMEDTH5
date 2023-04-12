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
            Schema::create('patient', function (Blueprint $table) {
                $table->id('patientID');
                $table->string('voornaam');
                $table->string('achternaam');
                $table->string('adres');
                $table->integer('LED_state')->default(0);
                $table->integer('app_state')->default(0);
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
