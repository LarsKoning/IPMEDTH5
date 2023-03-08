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
            Schema::create('inname', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('patientID');
                $table->unsignedBigInteger('medicijnID');
                $table->string('whichDay');
                $table->time('timeOpen');
                
                $table->foreign('patientID')->references('patientID')->on('patient');
                $table->foreign('medicijnID')->references('medicijnID')->on('medicijnen');
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inname', function (Blueprint $table) {
            $table->dropForeign('inname_patientID_foreign');
            $table->dropForeign('inname_medicijnID_foreign');
        });
        Schema::dropIfExists('inname');
    }
};
