@extends('layouts.app')

@section('content')

        <div class="col-md-7 col-md-offset-3">

        <h1>Contact Us</h1>          
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
               
            @endforeach
        </ul>

        @if(Session::has('message'))
            <div class="alert alert-info">
                {{ Session::get('message') }}
            </div>
        @endif

        {!! Form::open(array('route'=>'contact.store', 'class'=>'form')) !!}
        
        <div class="form-group">
            {{ Form::label( 'Your Name' )}}
            {{ Form::input('name', 'name', null,['class'=>'form-control'])}}
        </div>
        <div class="form-group">              
            {{ Form::label( 'Your Email' )}}
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
@endsection

