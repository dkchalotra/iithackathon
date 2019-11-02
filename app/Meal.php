<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public $timestamps = false;

    public function feedbacks(){
        return $this->hasMany('App\Feedback');
    }
}
