@extends('layouts.app')
@section('title', ' | Show All Customers')
@section('content')
    <div class="col-md-8">
    
        <table class="table">
        <thead>
            <th>#</th>
            <th>Customer Name</th>
            <th>Plate</th>
            <th>#</th>
            <th>#</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            
       
        <tr>
            <th>{{ $customer->id}}</th>
            <td>{{ $customer->name}}</td>
            <td>{{ $customer->plate }}</td>
            <td>{{ $customer->id}}</td>
            <td>{{ $customer->id}}</td>
            <td></td>

        </tr>
         @endforeach
        </tbody>
        </table>
    </div>
@endsection