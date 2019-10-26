@extends('admin::inc/header')
@section('title', 'Add testimonial')
@include('admin::inc/menu')
@section('content')
<div class="container">
    <div class="cms-body">
    <p>Create a new slider</p>
	<form method="POST" action=/admin/sliders>
		@csrf

		<div class="field-group">
			<label for="name">Slider name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="field-group">
			<label for="status">Slider status</label>
			<input type="checkbox" name="status" value="1">
		</div>

		<input type="submit" value="Store">
	</form>
	</div>
</div>
@endsection
