@extends('admin.template.main')

@section('title','Editar usuario'. $user->name)

@section('content')
	{!! Form::open(['route'=>['admin.users.update',$user],'method'=>'PUT'])!!}
	
		<div class="form-group">
			<label for="name"> Nombre</label>
			<input class="form-control" value= "{{ $user->name}}" placeholder="Nombre completo" required="required" name="name" type="text" id="name"> </input>
		</div>

		<div class="form-group">
			<label for="email"> Email</label>
			<input class="form-control" value= "{{ $user->email}}" placeholder="example@gmail.com" required="required" name="email" type="email" id="email"> </input>
		</div>

		<div class="form-group">
			<label for="type" required="required"> Tipo</label>
			<select for="type" class="form-control" placeholder="" name="type">
  				<option value="" >Seleccione un tipo</option>
  				<option value="admin" <?php  if (strcmp($user->type, "admin") == 0){echo "selected";} ?> >Administrador</option>
 				<option value="member"  <?php  if (strcmp($user->type, "member") == 0){echo "selected";} ?>>Miembro</option> 				
			</select>
		</div>

		<div class="form-group">
			
			<button type="submit" class="btn btn-primary">Editar</button>
		</div>

		{!!Form::close()!!}
@endsection