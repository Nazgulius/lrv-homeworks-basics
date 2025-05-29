<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
