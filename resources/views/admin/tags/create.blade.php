@extends('admin.template.main')

@section('title','Agregar tag')

@section('content')
	
	{!!Form::open(['route'=>'admin.tags.store','method'=>'POST'])!!}
		<div class="form-group">
			<label for="name"> Nombre</label>
			<input class="form-control" placeholder="Nombre del tag" required="required" name="name" type="text" id="name"> </input>
		</div>

		<div class="form-group">
			
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
		
	{!!	Form::close()!!}

@endsection
