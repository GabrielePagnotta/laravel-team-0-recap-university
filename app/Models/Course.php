<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name',
        'description',
        'period',
        'year',
        'cfu',
        'website'
    ];

    public function courses(){
        return $this->hasMany('App\Models\Exam');
    }
}
