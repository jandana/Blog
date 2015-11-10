@extends('admin.template.main')

@section('title','Editar categoria '.$category->name)

@section('content')
	{!!Form::open(['route'=>['admin.categories.update',$category], 'method'=>'PUT'])!!}
		<div class="form-group">
			<label for="name"> Nombre</label>
			<input class="form-control" value= "{{ $category->name}}" required="required" 
				name="name" type="text" id="name"> </input>
		</div>

		<div class="form-group">
			
			<button type="submit" class="btn btn-primary">Editar</button>
		</div>
		
	{!!	Form::close()!!}

@endsection