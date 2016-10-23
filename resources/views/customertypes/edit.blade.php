@extends('layouts.app')

@section('content')
<div class="col-md-8">

{!! Form::model($type, ['route'=>['customertype.update', $type->id], 'method'=>'PUT']) !!}
<div class="form-group">
    {{ Form::label('name','Customer Type') }}    
    {{ Form::input('name', 'name', null, ['class'=>'form-control']) }}
</div>
    {{ Form::submit('Save Changes', ['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
</div>
  
@endsection