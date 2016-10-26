<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{


    public function customer_type(){
        return $this->belongsTo('App\CustomerType'); 
    }


    public function company(){

        return $this->belongsTo('App\Company'); 
    }
}
