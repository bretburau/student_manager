<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $guarded = [];
    
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
