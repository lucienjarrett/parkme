@extends('layouts.app')
@section('content')
    <div class="col-md-8"> 
    <h1>Add Customer</h1>
    {{ Html::ul( $errors->all() )}}
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

    {!!Form::open(['route'=>['customer.store'], 'method'=>'POST'])!!}

    <div class="form-group">
        {{ Form::label('name', 'Customer Name: ') }}
        {{ Form::input('name', 'name', null, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('plate', 'Licence Plate') }}
        {{ Form::input('plate', 'plate', null, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('company_id', 'Select Company') }}
        {{ Form::select('company_id', $company, 'Select Company', ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('customer_type_id', 'Select Customer Type: ') }}
        {{ Form::select('customer_type_id', $customertype, 'Select Customer Type', ['class'=>'form-control', 'id'=>'customer_type_yd']) }}
    </div>
    {{ Form::reset('Reset', ['class'=>'btn btn-default']) }}
    {{ Form::submit('Save', ['class'=>'btn btn-success pull-right']) }}
    
    {!!Form::close() !!}
    
    </div>
@endsection 