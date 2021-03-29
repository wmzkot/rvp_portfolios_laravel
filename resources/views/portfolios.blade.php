@extends('layouts.base')

@push('styles')
	<link rel="stylesheet" href='{{asset("css/app.css")}}'>
@endpush

@push('scripts')
	<script src='{{asset("vendor/modal.js")}}'></script>
@endpush

@section('content')
	<h2 class='mt-4'>Наши работы:</h2>
    <br>

	    <!-- /.row -->

	    <div class="row">

	    	@foreach($objs as $one)
		      <div class="col-md-4 mb-5">
		        <div class="card h-100">
		          <img class="card-img-top" src="{{asset('uploads/' . $one->user_id . '/s' . $one->picture )}}" alt="">
		          <div class="card-body">
		            <h4 class="card-title">{{ $one->name }}</h4>
		            <p class="card-text">{{ $one->body }}</p>
		          </div>
		          <div class="card-footer">
		            <a href="#" data-id="{{$one->id}}" class="more-details btn btn-primary">Предпросмотр</a>
								<a href="{{asset('/work/' . $one->id)}}" data-id="{{$one->id}}" class="btn btn-primary">Подробнее</a>
		          </div>
		        </div>
		      </div>
	      @endforeach
	    </div>
	    <!-- /.row -->

@endsection
