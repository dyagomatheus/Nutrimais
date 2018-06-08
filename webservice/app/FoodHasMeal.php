<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodHasMeal extends Model
{
  protected $table = 'foods_has_meals';

  protected $fillable = ['food_id', 'meal_id', 'amount', 'measure'];
}
