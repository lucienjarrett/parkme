@extends('layouts.app')
@section('content')
    <div class="col-md-8"> 
    <h1>Add Customer</h1>
    {{ Html::ul( $errors->all() )}}
{{-- @include('layouts/flash::message') --}}

@if (session()->has('flash_notification.message'))
    <div class="alert alert-{{ session('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        {!! session('flash_notification.message') !!}
    </div>
@endif


@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

    {!!Form::open(['route'=>['customer.store'], 'method'=>'POST'])!!}

    <div class="form-group">
        {{ Form::label('name', 'Customer Name: ') }}
        {{ Form::input('name', 'name', null, ['class'=>'form-control', 'placeholder'=>'Customer name here']) }}
    </div>
    <div class="form-group">
        {{ Form::label('plate', 'Licence Plate') }}
        {{ Form::input('plate', 'plate', null, ['class'=>'form-control', 'placeholder'=>'Customer licence plate']) }}
    </div>
     <div class="form-group">
        {{ Form::label('customer_type_id', 'Select Customer Type: ') }}
        {{ Form::select('customer_type_id', $customertype, 'Select Customer Type', ['class'=>'form-control', 'id'=>'customer_type_id', 'placeholder'=>'Select customer type']) }}
    </div>
    <div class="form-group">
        {{ Form::label('company_id', 'Select Company') }}
        {{ Form::select('company_id', $company, null, ['class'=>'form-control', 'placeholder'=>'Select company']) }}
    </div>
   
<div class="form-group">
        {{ Form::label('active', 'Is Active:') }}  
        {{ Form::checkbox('active', 1, null, ['class' => 'checkbox']) }}
    </div>

    {{ Form::reset('Reset', ['class'=>'btn btn-default']) }}
    {{ Form::submit('Save', ['class'=>'btn btn-success pull-right']) }}
    
    {!!Form::close() !!}
    
    </div>
@endsection 