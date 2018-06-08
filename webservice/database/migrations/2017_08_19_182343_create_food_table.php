<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('food_name');
            $table->string('umidade', 10, 0);
            $table->string('energia_kcal', 10, 0);
            $table->string('energia_kJ', 10, 0);
            $table->string('proteina', 10, 0);
            $table->string('lipideos', 10, 0);
            $table->string('colesterol', 10, 0);
            $table->string('carboidrato', 10, 0);
            $table->string('fibra_alimentar', 10, 0);
            $table->string('cinzas', 10, 0);
            $table->string('calcio', 10, 0);
            $table->string('magnesio', 10, 0);
            $table->string('manganes', 10, 0);
            $table->string('fosforo', 10, 0);
            $table->string('ferro', 10, 0);
            $table->string('sodio', 10, 0);
            $table->string('potassio', 10, 0);
            $table->string('cobre', 10, 0);
            $table->string('zinco', 10, 0);
            $table->string('retinol', 10, 0);
            $table->string('RE', 10, 0);
            $table->string('RAE', 10, 0);
            $table->string('tiamina', 10, 0);
            $table->string('riboflavina', 10, 0);
            $table->string('piridoxina', 10, 0);
            $table->string('Niacina', 10, 0);
            $table->string('vitamina_c', 10, 0);
            $table->string('saturados', 10, 0);
            $table->string('mono_saturados', 10, 0);
            $table->string('poli_saturados', 10, 0);
            $table->string('12_0');
            $table->string('14_0');
            $table->string('16_0');
            $table->string('18_0');
            $table->string('20_0');
            $table->string('22_0');
            $table->string('24_0');
            $table->string('14_1');
            $table->string('16_1');
            $table->string('18_1');
            $table->string('20_1');
            $table->string('18_2_n_6');
            $table->string('18_3_n_3');
            $table->string('20_4');
            $table->string('20_5');
            $table->string('22_5');
            $table->string('22_6');
            $table->string('18_1t');
            $table->string('18_2t');
            $table->string('triplofano', 10, 0);
            $table->string('treonina', 10, 0);
            $table->string('isoleucina', 10, 0);
            $table->string('leucina', 10, 0);
            $table->string('lisina', 10, 0);
            $table->string('metionina', 10, 0);
            $table->string('cistina', 10, 0);
            $table->string('fenilalanina', 10, 0);
            $table->string('tirosina', 10, 0);
            $table->string('valina', 10, 0);
            $table->string('arginina', 10, 0);
            $table->string('histidina', 10, 0);
            $table->string('alanina', 10, 0);
            $table->string('acido_aspartico', 10, 0);
            $table->string('acido_glutaminico', 10, 0);
            $table->string('glicina', 10, 0);
            $table->string('prolina', 10, 0);
            $table->string('serina', 10, 0);
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
        Schema::dropIfExists('foods');
    }
}
