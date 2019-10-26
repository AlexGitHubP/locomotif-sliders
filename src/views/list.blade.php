<p>this is sliders listing</p>

@foreach($sliders as $slide)
	<p>Slide: {{ $slide->name }} <a href="/admin/sliders/{{$slide->id}}/edit">Edit slide</a> <form action="/admin/sliders/{{ $slide->id }}" method="POST">@method('DELETE') @csrf <input type="submit" value="Delete slide"/></form></p>
@endforeach

<a href="/admin/sliders/create">Add new slide</a>