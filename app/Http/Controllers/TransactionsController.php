<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\CustomerType;
use App\Customer_Transaction; 
use Session; 
use Alert; 
use Redirect; 
use DB; 



class TransactionsController extends Controller
{
    
    
    // public function index()
    // {
      
    //     //  $customer = Customer::find($id);  
                        
    //     //  return view('transaction.getcustomer')->with('customer', $customer);
    //     return view('transaction/index'); 
    // }


    public function record()
    {
    
        $customer = DB::table('customers')->pluck('name', 'id'); 
        return view('transaction.record')->with('customer', $customer); 
    }
    
    
}