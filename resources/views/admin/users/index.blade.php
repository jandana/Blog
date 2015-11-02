@extends('admin.template.main')

@section('title','Lista de usuario')

@section('content')
	<a href="{{route ('admin.users.create')}}" class="btn btn-info">Registrar nuevo usuario</a>
	<table class="table table-striped">
  		<thead>
  			<th>ID</th>
  			<th>Nombre</th>
  			<th>Correo</th>
  			<th>Tipo</th>	  			
  			<th>Acción</th>
  		</thead>
  		<tbody>
  			@foreach($users as $user)
  				<tr>
  					<!-- ejeplo de como hacerlo con laravel collective html-->
  					<td>{{$user->id}}</td>
  					<td>{{$user->name}}</td>
  						<!--ejemplo de como ahcer con php -->
  					<td><?php  echo $user->email; ?></td>
  					<td>
  						@if($user->type == "admin")
  							<span class="label label-danger"><?php  echo $user->type; ?> </span>
  						@else
							<span class="label label-primary"><?php  echo $user->type; ?> </span>
  						@endif
  					</td>
				
  					<td><a href="{{route('admin.users.destroy', $user->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')"></a> <a href="" class="btn btn-warning"></a></td>
  				</tr>
  			@endforeach
  		</tbody>
	</table>
	{!! $users->render() !!}
@endsection