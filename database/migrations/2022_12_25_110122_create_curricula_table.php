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
        Schema::create('curricula', function (Blueprint $table) {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');

            $table->id();
            $table->unsignedBigInteger('specialty_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('professor_id');
            $table->float('lecture_hours')->nullable();
            $table->float('pract_hours')->nullable();
            $table->float('lab_hours')->nullable();
            $table->timestamps();

            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('curricula');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
