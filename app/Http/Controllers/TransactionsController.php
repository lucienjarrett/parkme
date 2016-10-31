<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Customer; 


class TransactionsController extends Controller
{
    
    public function getCustomer($plate)
    {

        return $plate; 
    }
}
