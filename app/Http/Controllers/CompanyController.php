<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Redirect;
use App\Company;
use Carbon\Carbon;
use View;
use App\Http\Requests\CompanyFormRequest;
use Alert;

class CompanyController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $companies = Company::paginate(5);
        return view('company.index')->withCompanies($companies);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('company.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(CompanyFormRequest $request)
    {
        
        $company = new Company;
        
        $company->name = $request->name;
        $company->address = $request->address;
        $company->active = (int)$request->active;
        
        
        
        $company->save();
        Alert::success('Company successfully created...')->persistent("Close");
        
        //  Session::flash("message", "Company successfully created...");
        
        return Redirect::route('company.create');
        
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $company = Company::find($id);
        return view('company.show')->with('company',$company);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('company.edit')->with('company', $company);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(CompanyFormRequest $request, $id)
    {
        $company = Company::find($id);
        
        $company->name = $request->input('name');
        $company->address = $request->input('address');
        $company->active = (int)$request->input('active');
        
        $company->save();
        Alert::success('Company successfully edit...')->persistent("Close");
       // Session::flash('message', $request->input('name') . ' was updated..' );
        return Redirect::route('company.index');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        
        
        $company = Company::find($id);
        $company->delete();
        Alert::success('Company successfully deleted...');
        return Redirect::route('company.index')->with('message','Item deleted successfully');;
        
    }
}