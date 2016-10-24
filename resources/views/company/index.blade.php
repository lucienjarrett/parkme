@extends('layouts.app')
@section('title', ' | All Companies')

@section('content')
<h1>All Companies</h1>
<hr>
    <div class="col-md-8 col-md-offset-2">
    
    <table class="table">
    <thead>
        <th>#</th>
        <th>Company Name</th>
        <th>Address</th>
        <th>Active</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($companies as $company)
          
    <tr>
    <th>{{ $company->id }}</th>
    <td>{{ $company->name }}</td>
    <td>{{ $company->address }}</td>
    <td>{{ $company->active }}</td>
    <td></td>
    </tr>
      
    @endforeach
 
    </tbody>
     
    </table>

     {!! $companies->links() !!}
    </div>
   
@endsection