<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('socioeconomic_score', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('renta_joven_points')->nullable();
            $table->tinyInteger('apprenticeship_contract_points')->nullable();
            $table->tinyInteger('fic_support_points')->nullable();
            $table->tinyInteger('regular_support_points')->nullable();
            $table->tinyInteger('employment_points')->nullable();
            $table->tinyInteger('sponsorship_points')->nullable();
            $table->tinyInteger('sena_food_support_points')->nullable();
            $table->tinyInteger('sena_transport_support_points')->nullable();
            $table->tinyInteger('sena_tech_support_points')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('socioeconomic_score');
    }
};
