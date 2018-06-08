<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
  protected $table = 'meals';

  protected $fillable = ['measure', 'amount', 'food_id'];

  public function food()
  {
    return $this->belongsToMany('App\Food', 'foods_has_meals')->withPivot(['measure']);;
  }

}
