@extends('layouts.base')

@section('content')
  <div class='container'>
    <div class="card" style="/*width: 18rem;*/">      
      <img class='card-img-top info-img' src="{{asset('uploads/' . $obj->user_id . '/' . $obj->picture )}}" alt="{{$obj->name}}">
      <div class="card-body">
        <h5 class="card-title">{{$obj->name}}</h5>
        <p class="card-text">{!! $obj->body !!}</p>
      </div>

    <a href="#" onclick="history.back()" class="a-delete btn btn-primary text-white"><i class="bi bi-arrow-left-circle"></i>  Назад</a>
    </div>
  </div>
@endsection