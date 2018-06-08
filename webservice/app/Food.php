<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  protected $table = 'foods';

  protected $fillable = ['food_name', 'umidade', 'energia_kcal', 'energia_kJ', 'proteina', 'lipideos', 'colesterol', 'carboidrato', 'fibra_alimentar', 'cinzas', 'calcio', 'magnesio', 'manganes', 'fosforo', 'ferro', 'sodio', 'potassio', 'cobre', 'retinol', 'RE', 'RAE', 'tiamina', 'riboflavina', 'piridoxina', 'Niacina', 'vitamina_c', 'saturados', 'mono_saturados', 'poli_saturados', '12_0', '14_0', '16_0', '18_0', '20_0', '22_0', '24_0', '14_1', '16_1', '18_1', '20_1', '18_2_n_6', '18_3_n_3', '20_4', '20_5', '22_5', '22_6', '18_1t', '18_2t', 'triplofano', 'treonina', 'isoleucina', 'leucina', 'lisina', 'metionina', 'cistina', 'fenilalanina', 'tirosina', 'valina', 'arginina', 'histidina', 'alanina', 'acido_aspartico', 'acido_glutaminico', 'glicina', 'prolina', 'serina'];

  public function meal()
  {
    return $this->belongsToMany('App\Meal', 'foods_has_meals', 'food_id', 'meal_id');
  }
}
