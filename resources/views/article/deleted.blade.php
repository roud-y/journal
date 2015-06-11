@extends('layout')

@section('content')
	
		{{-- expr --}}
	<p>
		<a href="{{route('article.index')}}">
			<button type="button" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
			</button>
		</a>
	</p>
	@if (count($article) > 0)
	<h3>Here's all the deleted articles</h3>
		<ul class="list-group">

			@foreach ($article as $element)
				<li class="list-group-item">
					<h3>{{$element->title}}</h3>
					<p class="list-group-item-text">{{$element->intro}}</p>
				{!! Form::open(['url' => route('article.restore', $element->slug), 'method' => 'PATCH']) !!}
					<button type="submit" class="btn btn-default btn-lg">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					</button>
				{!! Form::close() !!}
				</li>
			@endforeach	

		</ul>
	@else
		<h3>No articles have been deleted</h3>
	@endif
	

@stop