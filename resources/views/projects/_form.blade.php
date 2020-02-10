<div class="form-group">
	<label for="title">
		Título del proyecto
		<input class="form-control border-0 bg-light shadow-sm"
			id="title" 
			type="text" 
			name="title" 
			value="{{old('title',$project->title)}}">
	</label>
</div>
<div class="form-group">
	<label for="url">
		URL del proyecto
		<input class="form-control border-0 bg-light shadow-sm" 
			id="url" 
			type="text" 
			name="url" 
			value="{{old('url',$project->url)}}">
	</label>
</div>
<div class="form-group">
	<label for="description">
		Descripción del proyecto
		<textarea class="form-control border-0 bg-light shadow-sm"
			name="description"
			>{{old('description',$project->description)}}
		</textarea>
	</label>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>

<a class="btn btn-link btn-block" 
	href="{{ route('projects.index') }}">
	Cancelar
</a>
