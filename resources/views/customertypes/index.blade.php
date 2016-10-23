@extends('layouts.app') @section('content')

<div class="col-md-8 col-md-offset-2"></div>
<h1> Customer Types</h1>
<hr> 

@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table">
    <thead>
        <th>#</th>
        <th>Customer Type</th>
        <th>Modified</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($types as $type)
        <tr>
            <th> {{ $type->id }}</th>
            <td> {{ $type->name }}</td>
             <td> {{ $type->updated_at->toDateString() }}</td>
            <td><a href="{{ route('customertype.edit', $type->id) }}" class="btn btn-default btn-sm">Edit</a> </td>
        </tr>
        @endforeach
    </tbody>
</table>
<h2> Add Customer Types </h2>
<div class="row">
    {{ Html::ul($errors->all()) }} 
    {!! Form::open(array(route('customertype.store'))) !!}
    <div class="form-group">
        {{ Form::label('Customer Type Name: ') }} 
        {{ Form::input('name', 'name', null, ['class'=>'form-control', 'placeholder'=>'Customer type name here...']) }}
    </div>
    {{ Form::submit('Add New', ['class'=>'btn btn-primary']) }} {!! Form::close() !!}
</div>


@endsection()