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
        Schema::create('users', function (Blueprint $table) {
            $table->id('accountID');
            $table->unsignedBigInteger('isPatient');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->foreign('isPatient')->references('patientID')->on('patient');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_isPatient_foreign');
        });
        Schema::dropIfExists('users');
    }
};
