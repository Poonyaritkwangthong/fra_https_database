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
        Schema::create('finding_facts', function (Blueprint $table) {
            $table->id();
            $table->string('receive');
            $table->text('receive_detail')->nullable();
            $table->date('admit_date')->nullable();
            $table->string('facts_target_group');
            $table->text('facts_target_group_detail')->nullable();
            $table->integer('medical_expenses');
            $table->integer('can_pay');
            $table->integer('helping_pay');
            $table->string('informant');
            $table->string('other_name')->nullable();
            $table->string('relation')->nullable();
            $table->string('address_informant');
            $table->integer('informant_phone_num');
            $table->integer('income');
            $table->string('source_of_income');
            $table->string('source_of_income_detail')->nullable();
            $table->string('having_debt');
            $table->integer('total_debt')->nullable();
            $table->string('source_of_debt')->nullable();
            $table->bigInteger('general_information_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finding_facts');
    }
};
