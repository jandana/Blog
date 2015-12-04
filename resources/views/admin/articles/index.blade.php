@extends('admin.template.main')

@section('title'.'Listado de articulos')

@section('content')
	<a href="{{route('admin.articles.create')}}" class="btn btn-info">Registrar nuevo articulo</a>
	
	<!-- Buscador de articulos -->
		{!! Form::open(['route'=>'admin.articles.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
			<div class="input-group">
				{!! Form::text('title', null,['class'=>'form-control','placeholder'=>'Buscar tag...',
				'aria-describedby'=>'search'])!!}
				<span class="input-group-addon" id="search" >
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</span>
			</div>
		{!! Form::close()!!}
	<!-- fin del buscador -->

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Titulo </th>
			<th>Categoria</th>
			<th>Usuario</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{{$article->id}}</td>
					<td>{{$article->title}}</td>
					<td>{{$article->category->name}}</td>
					<td>{{$article->user->name}}</td>
					<td>
						<a href="{{route('admin.articles.destroy',$article->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')"></a> 
                		<a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-warning"></a>
                	</td>
  				</tr>				
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $articles->render() !!}
@endsection