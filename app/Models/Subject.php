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

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
    
     public function marks(){
        return $this->hasMany(Mark::class);
    }
}
