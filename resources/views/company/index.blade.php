@extends('layouts.app')
@section('title', ' | All Companies')

@section('content')
<h1>All Companies</h1>
<hr>
   @if(Session::has('message'))
            <div class="alert alert-info">
                {{ Session::get('message') }}
            </div>
        @endif
    <div class="col-md-8 col-md-offset-2">
    <a href="{{ route('company.create') }}" class="btn btn-primary pull-right">Add New</a>
    <table class="table">
    <thead>
        <th>#</th>
        <th>Company Name</th>
        <th>Address</th>
        <th>Active</th>
        <th>Date Added</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($companies as $company)
          
    <tr>
    <th>{{ $company->id }}</th>
    <td>{{ $company->name }}</td>
    <td>{{ $company->address }}</td>
    <td>{{ ($company->active)=="1" ? "Yes" : "No" }}</td>
    <td>{{ $company->created_at }}</td>
    <td><a href="{{ route('company.show', $company->id) }}" class="btn btn-primary btn-sm" >Show </a>
    <a href="{{ route('company.edit', $company->id) }}" class="btn btn-success btn-sm">Edit</a>
     {!! Form::open(['route' => ['company.destroy', $company->id], 'method' => 'delete']) !!}
     <input class="btn btn-default btn-sm" type="submit" value="Del" />
    {!! Form::close() !!}</td>
    </tr>
      
    @endforeach
 
    </tbody>
     
    </table>

     {!! $companies->links() !!}
    </div>
   
@endsection