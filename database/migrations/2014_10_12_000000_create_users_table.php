<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
return new class extends Migration {
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained('role')->onDelete('cascade');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

=======
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('document_type');
        $table->string('document_number')->unique();
        $table->string('name');
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->rememberToken()->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
    public function down()
    {
        Schema::dropIfExists('users');
    }
<<<<<<< HEAD
};
=======
}
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
