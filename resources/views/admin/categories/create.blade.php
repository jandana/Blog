@extends('admin.template.main')

@section('title','Agregar categoria')

@section('content')
	{!!Form::open(['route'=>'admin.categories.store','method'=>'POST'])!!}
		<div class="form-group">
			<label for="name"> Nombre</label>
			<input class="form-control" placeholder="Nombre categoria" required="required" name="name" type="text" id="name"> </input>
		</div>

		<div class="form-group">
			
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
		
	{!!	Form::close()!!}

@endsection