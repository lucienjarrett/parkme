@extends('layouts.app')
@section('title', '| Edit Company' )
@section('content')
    <div class="col-md-8">
    {{ Html::ul($errors->all()) }}
    
    {!!Form::model($company, ['route'=>['company.update', $company->id], 'method'=>'PUT']) !!}
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

        {{ Form::submit('Save changes', ['class'=>'btn btn-primary pull-right']) }}
       
{{ Html::linkRoute('company.index', 'Back Company List',null , ['class'=>'btn btn-primary pull-left']) }}
    {!!Form::close() !!}
    </div>
@endsection