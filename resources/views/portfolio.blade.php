@extends('layouts.base')

@section('content')
  <h2>{{$obj->name}}</h2>
  <img src="{{asset('uploads/' . $obj->user_id . '/s' . $obj->picture )}}" alt="{{$obj->name}}">
  <p class="card-text">{!! $obj->body !!}</p>
@endsection