<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends User
{
    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }
}
