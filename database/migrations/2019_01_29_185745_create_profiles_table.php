<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable()->default(NULL);
            $table->string('last_name')->nullable()->default(NULL);
            $table->string('patronymic')->nullable()->default(NULL);
            $table->enum('gender', ['male', 'female'])->nullable()->default(NULL);
            $table->date('dob')->nullable()->default(NULL);
            $table->string('avatar')->nullable()->default(NULL);
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
