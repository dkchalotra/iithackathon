<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $timestamps = false;

    public function feedbacks(){
        return $this->hasMany('App\Feedback');
    }
}
