@extends('layouts.app')

@section('content')
<h1>Test</h1>
<hr>    
<div class="col-md-8 ">

{!! Form::open(['method'=>'GET']) !!}
<div class="input-group">
    {{ Form::input('search', 'search', null, ['class'=>'form-control', 'placeholder'=>'Type search here..']) }}

    {{-- {{ Form::submit('Go', ['class'=>'btn btn-primary'])}} --}}
</div>
{!! Form::close() !!}

@endsection


