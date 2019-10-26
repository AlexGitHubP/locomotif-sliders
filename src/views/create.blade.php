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