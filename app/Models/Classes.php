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

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
