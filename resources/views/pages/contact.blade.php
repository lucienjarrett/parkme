@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-3">

        <h1>Contact Us</h1>          
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
               
            @endforeach
        </ul>

        {!! Form::open(array('route'=>'contact.store', 'class'=>'form')) !!}
        
        <div class="form-group">
            {{ Form::label('name', 'Name' )}}
                    {{ Form::input('name', 'Name', null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">              
            {{ Form::label('email', 'Email' )}}
            {{ Form::input('email', 'email', null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{ Form::label( 'Your Message' )}}
            {{ Form::textarea('message', null, ['class'=>'form-control'])}}    
        </div>      
        <div class="form-group">
            {{ Form::submit('Contact Us! ', ['class'=>'btn btn-primary']) }}
        </div>        
            {!! Form::close() !!}
            

        </div>
    </div>
</div>
@endsection

