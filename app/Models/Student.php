<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'class_id',
        
        'last_name',
        'gender',
        'date_of_birth',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function class(){
        return $this->belongsTo(Classes::class);
    }
    public function marks(){
        return $this->hasMany(Mark::class);
    }
}
