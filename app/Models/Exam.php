<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $fillable = [
        'date',
        'hour',
        'location',
        'address'
    ];

    public function Exam(){
        return $this->belongsTo('App\Models\Course');
    }
}
