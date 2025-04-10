<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreatePasswordResetsTable extends Migration
=======
return new class extends Migration
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
<<<<<<< HEAD
}
=======
};
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
