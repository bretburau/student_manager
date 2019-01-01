<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends User
{
    protected $table = 'users';

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
