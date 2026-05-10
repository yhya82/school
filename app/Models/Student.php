<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'class_id',
        'first_name',
        'last_name',
    ];

    public function user(){
        return $this->belongTo(User::class);
    }
}
