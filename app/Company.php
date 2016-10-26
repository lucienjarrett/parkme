<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    // public function scopeSearchCompany($query, $name)
    // {
    //     return $query->where('name', 'like', $name);
    // }
    
    
    public function customer(){
        return $this->hasOne('App\Customer');
    }
    

    
}