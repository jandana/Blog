@extends('admin.template.main')

@section('title','Listado de categorias')

@section('content')
	<a href="{{route('admin.categories.create')}}" class="btn btn-info">Registrar nueva categoria</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>
						<a href="{{route('admin.categories.destroy',$category->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')"></a> 
                		<a href="{{route('admin.categories.edit',$category->id)}}" class="btn btn-warning"></a>
                	</td>
  				</tr>				
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection