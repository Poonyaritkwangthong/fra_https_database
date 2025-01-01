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
        Schema::create('informants', function (Blueprint $table) {
            $table->id();
            $table->string('informant_name');
            $table->integer('informant_age');
            $table->string('related');
            $table->string('patient_name');
            $table->integer('HN');
            $table->integer('patient_age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informant');
    }
};
