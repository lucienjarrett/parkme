<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    //

    public function customer(){

        return $this->hasOne('App\Customer'); 
    }
}
