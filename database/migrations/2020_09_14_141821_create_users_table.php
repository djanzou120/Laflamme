<?php

use Database\Seeders\UsersTableSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('password');
            $table->unsignedBigInteger('role_id');
            $table->string('email', 255)->unique();
            $table->string('profile', 255)->nullable();
            $table->string('bio', 255)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        $seeder = new UsersTableSeeder();
        $seeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
