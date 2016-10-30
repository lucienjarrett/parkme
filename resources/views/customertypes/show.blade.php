@extends('layouts.app')
@section('title', ' | Show Customer Type')
@section('content')

<h1>Show Customer Type</h1>
<div class="col-md-8">

<div class="well">
    <b>Id: </b>{{$type->id}}</br>
    <b>Customer Type: </b>{{$type->name}}</br>
    <b>Rate: </b> {{ $type->rate }} </br>
    <b>Added at: </b> {{$type->created_at}}</br>
    <b>Modified at: </b>{{$type->updated_at}}
    
</div>

{{ Html::linkRoute('customertype.index', 'All Customer Types', null, ['class'=>'btn btn-info ']) }}
<a href="{{ route('customertype.edit', $type->id )}}" class="btn btn-success">Edit Customer Type</a>

</div>
    
@endsection