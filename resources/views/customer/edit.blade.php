@extends('layouts.app')
@section('content')
    <div class="col-md-8"> 
    <h1> Edit Customer</h1>
    {{ Html::ul( $errors->all() )}}
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

    {!!Form::model($customer, ['route'=>['customer.update', $customer->id], 'method'=>'PUT'])!!}

    <div class="form-group">
        {{ Form::label('name', 'Customer Name: ') }}
        {{ Form::input('name', 'name', null, ['class'=>'form-control', 'placeholder']) }}
    </div>
    <div class="form-group">
        {{ Form::label('plate', 'Licence Plate') }}
        {{ Form::input('plate', 'plate', null, ['class'=>'form-control']) }}
    </div>

      <div class="form-group">
        {{ Form::label('customer_type_id', 'Select Customer Type: ') }}
        {{ Form::select('customer_type_id', $customertype, $customer->customer_type_id, ['class'=>'form-control', 'id'=>'customer_type_yd']) }}
    </div>

    <div class="form-group">
        {{ Form::label('company_id', 'Select Company') }}
        {{ Form::select('company_id', $company, $customer->company_id, ['class'=>'form-control']) }}
    </div>
    
  

    <div class="form-group">
        {{ Form::label('active', 'Is Active:') }}  
        {{ Form::checkbox('active', 1, $customer->active, ['class' => 'checkbox']) }}
    </div>

    {{ Html::linkRoute('customer.index', 'back', null, ['class'=>'btn btn-default']) }}
    {{ Form::submit('Save', ['class'=>'btn btn-success pull-right']) }}
    
    {!!Form::close() !!}
    
    </div>
@endsection 