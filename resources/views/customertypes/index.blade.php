@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2"></div>
<h1> Customer Types</h1>
<hr>

<table class="table">
<thead>
<th>#</th>  
<th>Customer Type</th>  
<th>Actions</th>  


</thead>
<tbody>
@foreach($types as $type)
<tr>

<th> {{ $type->id }}</th>
<td> {{ $type->name }}</td>
<td></td>
</tr>
@endforeach
</tbody>
</table>


@endsection()