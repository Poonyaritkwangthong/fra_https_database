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
        Schema::create('general_information', function (Blueprint $table) {
            $table->id();
            $table->date('case_date');
            $table->integer('hn');
            $table->integer('an');
            $table->integer('sn');
            $table->string('prefix');
            $table->string('full_name');
            $table->bigInteger('id_card_num');
            $table->date('birth_date');
            $table->integer('age');
            $table->string('nationality');
            $table->string('ethnicity');
            $table->string('education');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('healthcare_rights');
            $table->string('occupation');
            $table->string('phone_num');
            $table->string('current_address');
            $table->string('target_group');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generel_information');
    }
};
