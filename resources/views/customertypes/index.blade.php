@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2"></div>

<ul>
@foreach($types as $type)
<li> {{ $type->name }}</li>
@endforeach
</ul>


@endsection()