<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            //$table->string('state');
            $table->string('city');
            $table->string('title');
            $table->string('body');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('state_id')->unsigned();

            $table->foreign('state_id')->references('id')->on('states');
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
        Schema::dropIfExists('experiences');
    }
}
