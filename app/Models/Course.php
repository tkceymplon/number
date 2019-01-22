<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   public function subjects()
    {
return $this->hasMany('App\Models\Subject');
    }
     public function students()
    {
return $this->hasMany('App\Models\Student');
    }
}
