<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accadamicyear extends Model
{
   public function students()
    {
return $this->hasMany('App\Models\Student');
    }
}
