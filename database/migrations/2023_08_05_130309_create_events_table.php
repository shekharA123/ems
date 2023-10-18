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
            $table->string('link_url')->nullable();
            $table->string('candidate_profile')->nullable();
            $table->string('candidate_name')->nullable();
            $table->string('interpersonal_skill')->nullable();
            $table->string('communication_skill')->nullable();
            $table->string('problem_sovling')->nullable();
            $table->string('hr_profile')->nullable();
            $table->string('hr_name')->nullable();
            $table->string('hr_email')->nullable();
            $table->string('instruction')->nullable();
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
