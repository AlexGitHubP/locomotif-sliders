@extends('admin::inc/header')
@section('title', 'Edit testimonial')
@include('admin::inc/menu')
@section('content')
<div class="container">
    <div class="cms-body">
    <p>Edit slide: {{$slider->name}}</p>
	<form method="POST" action='/admin/sliders/{{$slider->id}}'>
		@csrf
		@method('PUT')

		<div class="field-group">
			<label for="name">Slider name</label>
			<input type="text" name="name" value="{{$slider->name}}">
		</div>

		<input type="submit" value="Update">
	</form>
	</div>
</div>

@endsection
