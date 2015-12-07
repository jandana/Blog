@extends('admin.template.main')

@section('title','Editar articulo '. $article->title)

@section('content')
	{!! Form::open (['route'=>['admin.articles.update',$article],'method'=>'PUT'])!!}
		<div class="form-group">
				{!!Form::label('title','Titulo')!!}
				{!!Form::text('title',$article->title,['class'=>'form-control','placeholder'=>'Titulo del articulo...','required'])!!}				
		</div>

		<div class="form-group">
				{!!Form::label('category_id','Categoria')!!}
				{!!Form::select('category_id',$categories,$article->category->id,['class'=>'form-control','placeholder'=>'Seleccione una opcion','required'])!!}
		</div>

		<div class="form-group">
				{!!Form::label('content','Contenido')!!}
				{!!Form::textarea('content',$article->content,['class'=>'form-control'])!!}
				
		</div>

		<div class="form-group">
				{!!Form::submit('Guardar cambios',['class'=>'btn btn-primary'])!!}		
				
		</div>
	{!!Form::close()!!}
@endsection