<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('socioeconomic_status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apprentice_id')->constrained('apprentices')->onDelete('cascade');
            $table->string('program_name', 255);
            $table->string('training_file_number', 50);
            $table->enum('training_modality', ['Presential', 'Virtual', 'Distance']);
            $table->enum('housing_location', ['Rural', 'Urban']);
            $table->tinyInteger('housing_stratum');
            $table->enum('health_regime', ['Contributory', 'Subsidized']);
            $table->string('health_provider', 100);
            $table->enum('health_link', ['Contributor', 'Beneficiary', 'Head of Family']);
            $table->foreignId('socioeconomic_score_id')->constrained('socioeconomic_score')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('socioeconomic_status');
    }
};
