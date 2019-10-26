@extends('admin::inc/header')
@section('title', 'Testimonial detail')
@include('admin::inc/menu')

@section('content')
<div class="container">
    <div class="cms-body">
		<p>Slide details</p>
		<p>Name is: {{ $slide->name }}</p>
    <p>status is: {{ $slide->status }}</p>
    <a href="/admin/sliders">Go back</a>
	</div>
</div>
@endsection
