@extends('layouts.app')
@section('title', ' | Show All Customers')
@section('content')
    <div class="col-md-8">
     <table class="table">
        <thead>
            <th>#</th>
            <th>Customer Name</th>
            <th>Plate</th>  
             <th>Customer Type</th>   
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
            <td>{{ $customer->company->name }}</td>
            <td>{{ $customer->created_at}}</td>           
            <td><a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm">Show</a></td>
        </tr>
         @endforeach
        </tbody>
        </table>
        {{ $customers->links() }}


        {{ Html::linkRoute('customer.create', 'Create New', null, ['class'=>'btn btn-success pull-right'] ) }}
       
    </div>
@endsection