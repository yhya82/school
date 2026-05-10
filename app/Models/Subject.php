<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'teacher_id',
        'subject_name',
        'code'
    ];
}
