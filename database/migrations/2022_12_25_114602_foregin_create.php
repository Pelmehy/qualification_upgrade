<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::table('professors', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('specialty_id')->references('id')->on('specialties');
        });

        Schema::table('journals', function (Blueprint $table) {
            $table->foreign('professor_id')->references('id')->on('professors');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('specialty_id')->references('id')->on('specialties');
        });

        Schema::table('curricula', function (Blueprint $table) {
            $table->foreign('specialty_id')->references('id')->on('specialties');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
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
