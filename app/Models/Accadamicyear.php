<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accadamicyear extends Model
{
	protected $fillable = ['acc_year'];

   public function students()
    {
return $this->hasMany('App\Models\Student');
    }
}
