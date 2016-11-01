<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CustomerFormRequest; 
use App\Http\Requests;
use App\Customer;
use Session;
use Redirect;
use App\Company;
use App\CustomerType;
use DB;
use Alert; 
//use App\Http\Requests\CustomerFormRequest;


class CustomerController extends Controller
{


 

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {

         $search = $request->get('search');
         
         //
         $customers = Customer::SearchByKeyword($search)
                                ->paginate(10); 

                                
         return view('customer.index')->with('customers', $customers);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $customertype = DB::table('customer_types')->pluck('name', 'id');
        $company = DB::table('companies')->pluck('name', 'id');
        
        return view('customer.create')->with('company', $company)->with('customertype', $customertype);
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(CustomerFormRequest $request)
    {

        $customer = new Customer;
        
       

        $customer->name = $request->name;
        $customer->customer_type_id = $request->customer_type_id;
        $customer->company_id = $request->company_id;
        $customer->plate = $request->plate;
        $customer->active = $request->plate;
        
        $customer->save();
        
       
        Alert::success('Success Message customer added..')->persistent("Close"); 
        return Redirect::route('customer.index');
        
        
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $customer = Customer::find($id);
        
        return view('customer.show')->with('customer', $customer);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $customer = Customer::find($id);
        $customertype = DB::table('customer_types')->pluck('name', 'id'); 
        $company = DB::table('companies')->pluck('name', 'id'); 

        return view('customer.edit')->with('customer', $customer)
                                    ->with('customertype', $customertype)
                                    ->with('company', $company);  
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(CustomerFormRequest $request, $id)
    {
        $customer = Customer::find($id);

        $customer->name = $request->input('name'); 
        $customer->customer_type_id = $request->input('customer_type_id'); 
        $customer->company_id = $request->input('company_id'); 
        $customer->active = $request->input('active');  
        $customer->plate = $request->input('plate'); 


        $customer->save(); 
       // Session::flash('message', 'Successfully updated...'); 
        Alert::success('Success Message customer updated..')->persistent("Close"); 
        return Redirect::route('customer.index'); 
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
      $customer = Customer::find($id);
    
      $customer->delete(); 
      //Session::flash('message', 'Customer deleted..');
      Alert::success('Deleted.'); 
      return Redirect::route('customer.index');  

    }
}