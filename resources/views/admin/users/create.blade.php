@extends('admin.template.main')

@section('title','Crear usuario')

@section('content')
	
	@if(count($errors)>0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form method="POST" action="http://localhost:8000/admin/users" accept-charset="UTF-8"><input  
		name="_token" type="hidden" value="{{ csrf_token() }}">
	
		<div class="form-group">
			<label for="name"> Nombre</label>
			<input class="form-control" placeholder="Nombre completo" required="required" name="name" type="text" id="name"> </input>
		</div>

		<div class="form-group">
			<label for="email"> Email</label>
			<input class="form-control" placeholder="example@gmail.com" required="required" name="email" type="email" id="email"> </input>
		</div>

		<div class="form-group">
			<label for="password"> Contraseña</label>
			<input class="form-control" placeholder="" required="required" name="password" type="password" id="password"> </input>
		</div>

		<div class="form-group">
			<label for="type" required="required"> Tipo</label>
			<select for="type" class="form-control" placeholder="" name="type">
  				<option value="">Seleccione un tipo</option>
  				<option value="admin">Administrador</option>
 				<option value="member">Miembro</option> 				
			</select>
		</div>

		<div class="form-group">
			
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>

	</form>
@endsection
