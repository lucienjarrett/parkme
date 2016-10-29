@extends('layouts.app')
@section('title', ' | Show All Customers')
@section('content')
<h1>All Customers</h1>
    
 
       
    <div class="col-md-8">
        @if(Session::has('message'))
            <div class="alert alert-info">
                {{ Session::get('message') }}
            </div>
        @endif
    
     <table class="table">
     
        <thead>
            <th>#</th>
            <th>Customer Name</th>
            <th>Plate</th>  
             <th>Customer Type</th>   
              
             <th>Created at</th>        
            <th>Action</th>
        </thead>
         
        <tbody>      
        @foreach($customers as $customer)  
        <tr>
            <th>{{ $customer->id}}</th>
            <td>{{ $customer->name}}</td>
            <td>{{ $customer->plate }}</td>
            <td>{{ $customer->customer_type->name }}</td>
          
            <td>{{ $customer->created_at}}</td>           
            <td><a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm">Show</a>
            <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary btn-sm">Edit</a>
            
            {!! Form::open(['route'=>['customer.destroy', $customer->id], 'method'=>'DELETE','style'=>'display:inline']) !!}
            {{ Form::submit('Del', ['class'=>'btn btn-danger btn-sm']) }}
            {!! Form::close() !!}
            </td>
        </tr>
         @endforeach
        </tbody>
        </table>
        {{ $customers->links() }}
     
    </div>
     {{ Html::linkRoute('customer.create', 'Create New', null, ['class'=>'btn btn-success pull-right'] ) }}
  

@endsection