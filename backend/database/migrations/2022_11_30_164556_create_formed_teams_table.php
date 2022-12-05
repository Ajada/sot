<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formed_teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('training_name');
            $table->string('instructor', 40);
            $table->string('category');
            $table->string('realization');
            $table->string('valid_until');
            $table->string('attendance_list');
            $table->string('certificates');
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
        Schema::table('formed_teams', function(Blueprint $table){
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('formed_teams');
    }
};
