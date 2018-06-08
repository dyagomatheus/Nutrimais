<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
  protected $table = 'exams';

  protected $fillable = ['description', 'date_exam', 'pacient_id'];

  public function pacient()
  {
    return $this->belongsTo('App\Pacient');
  }
}
