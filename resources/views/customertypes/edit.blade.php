@extends('layouts.app')
@section('content')
<div class="col-md-8">

{!! Form::model($type, ['route'=>['customertype.update', $type->id], 'method'=>'PUT']) !!}
<div class="form-group">
    {{ Form::label('name','Customer Type') }}    
    {{ Form::input('name', 'name', null, ['class'=>'form-control']) }}  
</div>

<div class="form-group">
    {{ Form::label('rate', 'Rate') }}
    {{ Form::input('rate', 'rate', null, ['class'=>'form-control'])}}
</div>
    {{ Form::submit('Save Changes', ['class'=>'btn btn-primary']) }}
    <a href="{{ route('customertype.index') }}" class="btn btn-info"> Back to List </a>
    {!! Form::close() !!}
</div>

<div class="row">
    
</div>
  
@endsection