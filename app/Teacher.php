<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends User
{
    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
