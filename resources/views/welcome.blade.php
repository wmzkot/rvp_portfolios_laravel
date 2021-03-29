@extends('layouts.base')

@section('content')
	<h2>{{$obj->name}}</h2>
    <br>
    {!! $obj->body !!}
@endsection