<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{

    protected $guarded = [];
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
