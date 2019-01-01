<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends User
{
    protected $table = 'users';

    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }
}
