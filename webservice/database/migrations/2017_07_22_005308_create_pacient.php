<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('pacients', function (blueprint $table){
          $table->engine = 'InnoDB';

          $table->increments('id');
          $table->string('name', 45);
          $table->string('sex', 15);
          $table->date('date_birth');
          $table->string('number_phone',45);
          $table->string('email', 45);
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
        Schema::dropIfExists('pacients');
    }
}
