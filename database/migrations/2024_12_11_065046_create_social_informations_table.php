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
        Schema::create('social_informations', function (Blueprint $table) {
            $table->id();
            $table->text('social_information');
            $table->text('conditions_of_problems_found');
            $table->text('help_planning');
            $table->bigInteger('general_information_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_informations');
    }
};
