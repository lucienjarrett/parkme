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
    
{{-- <div class="col-md-8 col-md-offset-2">
{!! Form::open(['class'=>"navbar-form navbar-left pull-right", 'method'=>'GET']) !!}
<div class="form-group">
{{ Form::input('search', 'search', null, ['class'=>'form-control', 'placeholder'=>'Search here...'])}}
</div>
{{ Form::submit('Search', ['class'=>'btn btn-success']) }}
{!! Form::close() !!}
</div> --}}
    <div class="col-md-8 col-md-offset-2">
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
    <td><a href="{{ route('company.show', $company->id) }}"> {{ $company->name }}</a></td>
    <td>{{ $company->address }}</td>
    <td>{{ ($company->active)=="1" ? "Yes" : "No" }}</td>
    <td>{{ $company->created_at }}</td>
    <td>
    <a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary btn-sm">Edit</a>
     {!! Form::open(['route' => ['company.destroy', $company->id], 'method' => 'delete','style'=>'display:inline']) !!}
     <input class="btn btn-danger btn-sm" type="submit" value="Delete" />
    {!! Form::close() !!}</td>
    </tr>
      
    @endforeach
 
    </tbody>
     
    </table>
     {!! $companies->links() !!}
     <a href="{{ route('company.create') }}" class="btn btn-success pull-right">Add New</a>
    </div>
   
@endsection