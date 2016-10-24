@extends('layouts.app')
@section('title', ' | Create Company')

@section('content')
    
    <div class="col-md-8">


    <h1>Add Company</h1>

        
        <!-- if there are creation errors, they will show here -->
        {{ Html::ul($errors->all()) }}

        {{-- {{ Html::ul($errors) }} --}}

        @if(Session::has('message'))
            <div class="alert alert-info">
                {{ Session::get('message') }}
            </div>
        @endif



        {!! Form::open(['route'=>['company.store'], 'method'=>'POST']) !!}

    <div class="form-group">
        {{ Form::label('name', 'Company Name:') }}
        {{ Form::input('name','name', null, ['class'=> 'form-control'] ) }}
    
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address:') }}
        {{ Form::input('address','address', null, ['class'=> 'form-control'] ) }}
    
    </div>
    <div class="form-group">
        {{ Form::label('active', 'Is Active:') }}  
        {{ Form::checkbox('active', 1, null, ['class' => 'field']) }}
    </div>

        {{ Form::submit('Add New', ['class'=>'btn btn-primary pull-right']) }}
        {{ Form::reset('Reset', ['class'=>'btn btn-default pull-left']) }}
        {!! Form::close() !!}
    </div>

@endsection