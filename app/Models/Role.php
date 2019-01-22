<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public static function userData()
    {
        return static::where('name','!=','SAdmin');
    }
    public function users()
    {
return $this->hasMany(App\User::class);    }
}
