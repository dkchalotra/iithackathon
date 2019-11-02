<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $timestamps = false;
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
    public function meal()
    {
        return $this->belongsTo('App\Meal');
    }
}
