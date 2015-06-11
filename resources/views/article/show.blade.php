@extends('layout')

@section('content')
	
	<div class="list-group">
		<ul class="list-group">
		<li class="list-group-item">
			<h2>{{$article->title}}</h2>
			<p>{{$article->description}}</p>
		</li>
		</ul>
		<button onClick="window.location = '{{ route('article.index') }}';" type="button" class="btn btn-default btn-lg">
			<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
		</button>
		<button onClick="window.location = '{{ route('article.edit',$article->slug) }}';" type="button" class="btn btn-default btn-lg">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
		</button>
		{!! Form::open(['url' => route('article.destroy', $article->slug), 'method' => 'DELETE']) !!}
			<button type="submit" class="btn btn-danger btn-lg">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			</button>
		{!! Form::close() !!}
	</div>

@stop