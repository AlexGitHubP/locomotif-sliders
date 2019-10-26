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