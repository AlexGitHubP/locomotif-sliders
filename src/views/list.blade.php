@extends('admin::inc/header')
@section('title', 'Testimonials list')
@include('admin::inc/menu')

@section('content')
<div class="container">
	<div class="cms-body">
		<p>this is sliders listing</p>
		<a href="/admin/sliders/create">Add new slide</a>
		@foreach($sliders as $slide)
			<p>Slide: {{ $slide->name }} <a href="/admin/sliders/{{$slide->id}}/edit">Edit slide</a> <form action="/admin/sliders/{{ $slide->id }}" method="POST">@method('DELETE') @csrf <input type="submit" value="Delete slide"/></form></p>
		@endforeach
    	</div>
</div>

@endsection

