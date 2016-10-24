@extends('layouts.app')
@section('title', '| Show Company')
@section('content')
    <div class="col-md-8">
        <h1>Show <span> {{$company->name}} </span></h1>
    
    <div class="well">
   <b>Company Name:</b> {{$company->name }}<br>
   <b>Address: </b>{{$company->address}}<br>
   <b> Is Actve?</b> {{ ($company->active)=="1"? "Yes" : "No"}}<br>
   <b>Created At: </b>{{$company->created_at}} <br>
   <b>Updated At: </b>{{ $company->updated_at}}
    </div>


    <a href="{{ route('company.edit', $company->id) }}" class="btn btn-default" >Edit Company</a>
    {{ Html::linkRoute('company.index', 'View All Companies',null , ['class'=>'btn btn-primary'])}}
    
    </div>

    </div>
@endsection