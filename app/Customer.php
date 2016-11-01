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


    public function scopeSearchByKeyword($query, $keyword)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword) {
                $query->where("name", "LIKE","%$keyword%")
                     ->orWhere("plate", "LIKE", "%$keyword%")
                    // ->orWhere("blood_group", "LIKE", "%$keyword%")
                    // ->orWhere("phone", "LIKE", "%$keyword%")
                    ;
            });
        }
        return $query;
    }
}
