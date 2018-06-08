<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodPlan extends Model
{
  protected $table = 'food_plans';

  protected $fillable = ['description', 'pacient_id'];

  public function meal()
  {
    return $this->belongsToMany('App\Meal', 'food_plans_has_meals');
  }
}
