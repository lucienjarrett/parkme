@extends('layouts.app')



@section ('content')

<div class="col-md-8">
{!! Form::open(['route'=>['customertype.destroy', $type->id], 'method'=>'DELETE']) !!}
{{ Form::submit('delete') }}
{!! Form::close() !!}
</div>

@endsection() 
