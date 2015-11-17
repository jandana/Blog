@extends('admin.template.main')

@section('title','Editar tag')

@section('content')
	
	{!!Form::open(['route'=>['admin.tags.update', $tag],'method'=>'PUT'])!!}
		<div class="form-group">
			<label for="name"> Nombre</label>
			<input class="form-control"  value="{{ $tag->name}}" placeholder="Nombre del tag" required="required" name="name" type="text" id="name"> </input>
		</div>

		<div class="form-group">
			
			<button type="submit" class="btn btn-primary">Editar</button>
		</div>
		
	{!!	Form::close()!!}

@endsection
