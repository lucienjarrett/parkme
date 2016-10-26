@extends('layouts.app')

@section('title', ' | Show Customer')

@section('content')
    <div class="col-md-8">
    <div class="well">
   <b>Id: </b> {{$customer->id}}<br>
   <b>Customer Name: </b>  {{$customer->name}}<br>
   <b>Customer Type:</b>  {{$customer->customer_type->name}}<br>
  <b>Company:</b>   {{$customer->company->name}}<br>
  <b>Created at:</b>   {{$customer->created_at}}<br>
  <b>Updated at:</b>{{$customer->updated_at}}
  
    </div>

    {{Html::linkRoute('customer.index','Back to Customers',null, ['class'=>'btn btn-info'] )}}
    {{Html::linkRoute('customer.edit','Edit Customer',$customer->id, ['class'=>'btn btn-primary'] )}}

    </div>
@endsection