@extends('layout')

@section('title','Contact')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">			
			<form class="bg-white shadow rounded py-3 px-4" 
			method="POST" action="{{ route('contact.store') }}">
				@csrf
				<h1 class="display-4"> {{ __('Contact') }} </h1>
				<hr>	
				<div class="form-group">
					<label for="name">Nombre</label>
					<input class="form-control bg-light shadow-sm @error('name')
					 is-invalid @else border-0 @enderror" 
					 	id="name"
						name="name" 
						placeholder="Nombre..." 
						required="" 
						value="{{ old('name') }}">
						@error('name')
							<snap class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</snap>		
						@enderror				
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control bg-light shadow-sm @error('email')
					 is-invalid @else border-0 @enderror"
					 	id="email"
						type="email" 
						name="email" 
						placeholder="Email..." 
						required="" 
						value="{{ old('email') }}">
						@error('email')
							<snap class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</snap>		
						@enderror
				</div>

				<div class="form-group">
					<label for="subject">Asunto</label>
					<input class="form-control bg-light shadow-sm @error('subject')
					 is-invalid @else border-0 @enderror" 
					 	id="subject"
						name="subject" 
						placeholder="Asunto..." 
						value="{{ old('subject') }}">
					@error('subject')
						<snap class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</snap>		
					@enderror
				</div>

				<div class="form-group">
					<label for="content">Contenido</label>
					<textarea class="form-control bg-light shadow-sm @error('content')
					 is-invalid @else border-0 @enderror"
					 	id="content"
						name="content" 
						placeholder="Mensaje...">{{ old('content') }}
					</textarea>
					@error('content')
						<snap class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</snap>		
					@enderror
				</div>

				<button class="btn btn-primary btn-lg btn-block">Enviar</button>
			</form>
		</div>
	</div>
	
</div>
@endsection