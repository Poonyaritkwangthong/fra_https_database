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
        Schema::create('family_tree_and_house_map', function (Blueprint $table) {
            $table->id();
            $table->string('family_tree')->nullable();
            $table->string('house_map')->nullable();
            $table->bigInteger('general_information_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_tree_and_house_map');
    }
};
