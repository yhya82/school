<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'gender',
        'qualification',
        'date_of_birth',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function classes(){
        return $this->hasMany(Classes::class);
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    
}
