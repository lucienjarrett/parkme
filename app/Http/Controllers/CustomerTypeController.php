<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\CustomerType;
use View;
use Carbon\Carbon;
use Redirect; 

class CustomerTypeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //
        $types = CustomerType::all();
        
        return view('customertypes/index')->withTypes($types);
    }
    
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view ('customertypes/create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        
        $this->validate($request, [
        'name'=>'required|max:150'
        ]);
        
        $customertype = new CustomerType;
        
        $customertype->name = $request->name;
        $customertype->rate = $request->rate; 
        
        $customertype->save();
        
        flash('Test');
        Session::flash('message', 'Successfully created '.$request->name);
        return Redirect::route('customertype.index');
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $type = CustomerType::find($id);
        return view('customertypes/show')->with('type', $type);  
        
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {    
        $type = CustomerType::find($id);
        
        return view('customertypes/edit')->with('type',$type);
        
        //return View::make('customertypes/edit')->with('type', $type);
        
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
        'name'=>'required|max:150',
        ]);
        
        $type = CustomerType::find($id);
        
        $type->name = $request->input('name');
        $type->rate = $request->input('rate');
        
        $type->save();
        Session::flash('message', 'Successfully updated to '.$request->input('name'));
        return Redirect::route('customertype.index');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $type = CustomerType::find($id);

        $type->delete();
        
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::route('customertype.index');
    }
}