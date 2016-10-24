@extends('layouts.app')
@section('title', '| Edit Company' )
@section('content')
    <div class="col-md-8">
    {{Html::ul($errors->all())}}
    @if(Session::has('message'))
            <div class="alert alert-info">
                {{ Session::get('message') }}
            </div>
        @endif



    {!!Form::model() !!}
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

    {!!Form::close() !!}
    </div>
@endsection