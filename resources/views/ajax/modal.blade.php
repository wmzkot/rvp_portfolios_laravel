
<div class="card-body mt-2">
	<h4 class="card-title">{{ $obj->name }}</h4>
	<p class="card-text">{!! $obj->body !!}</p>
</div>
<img class="card-img-top" src="{{asset('uploads/' . $obj->user_id . '/'.  $obj->picture )}}" alt="{{$obj->name}}" width="100%">

