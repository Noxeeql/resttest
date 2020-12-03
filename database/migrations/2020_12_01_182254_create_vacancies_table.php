<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->integer('min_reward')->nullable();
            $table->integer('mid_reward')->nullable();
            $table->integer('max_reward')->nullable();
            $table->text('text');
            $table->text('desc');
            $table->text('requirements');
            $table->time('work_time_start')->nullable();
            $table->time('work_time_end')->nullable();
            $table->time('work_time')->nullable();
            $table->boolean('enabled')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
