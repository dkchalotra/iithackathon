<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealTime extends Model
{
    public $timestamps = false;

    public function meal(){
        return $this->belongsTo('App\Meal');
    }
}
