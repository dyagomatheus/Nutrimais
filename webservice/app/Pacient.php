<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    protected $table = 'pacients';

    protected $fillable = ['name', 'sex', 'date_birth', 'number_phone', 'email'];
}
