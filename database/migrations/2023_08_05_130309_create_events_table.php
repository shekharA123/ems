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
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('link_url');
            $table->string('candidate_profile');
            $table->string('candidate_name');
            $table->string('interpersonal_skill');
            $table->string('communication_skill');
            $table->string('problem_sovling');
            $table->string('hr_profile');
            $table->string('hr_name');
            $table->string('hr_email');
            $table->string('instruction');
            $table->dateTime('start');
            $table->dateTime('end');
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
        Schema::dropIfExists('events');
    }
};
