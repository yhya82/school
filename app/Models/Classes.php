<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'teacher_id',
        'class_name',
        'level'
    ];
}
