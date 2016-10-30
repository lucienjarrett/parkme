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
        <th>Rate </th>
        <th>Modified</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($types as $type)
        <tr>
            <th> {{ $type->id }}</th>
            <td> {{ $type->name }}</td>
            <td> {{ $type->rate }}</td>
             <td> {{ $type->updated_at->toDateString() }}</td>
            <td> 
            <a href="{{ route('customertype.show', $type->id) }}" class="btn btn-info btn-sm">Show</a>
            <a href="{{ route('customertype.edit', $type->id) }}" class="btn btn-primary btn-sm">Edit</a>

             {!! Form::open(['route'=>['customertype.destroy', $type->id], 'method'=>'DELETE','style'=>'display:inline']) !!}
             {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) }}
            {!! Form::close() !!}

            </td>
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
    <div class="form-group">
    {{ Form::label('rate', 'Rate: ')}}
    {{ Form::input('rate', 'rate', null, ['class'=>'form-control', 'placeholder'=>'Type rate here..']) }}
    </div>
    {{ Form::submit('Add New', ['class'=>'btn btn-success pull-right', 'style'=>'display:inline']) }} 
    {!! Form::close() !!}
</div>




@endsection()