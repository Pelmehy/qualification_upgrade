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
        Schema::table('professors', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('speciality_id')->references('id')->on('specialties');
        });

        Schema::table('journals', function (Blueprint $table) {
            $table->foreign('professor_id')->references('id')->on('professors');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('speciality_id')->references('id')->on('specialties');
        });

        Schema::table('curriculums', function (Blueprint $table) {
            $table->foreign('speciality_id')->references('id')->on('specialties');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
