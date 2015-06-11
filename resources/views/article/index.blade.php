@extends('layout')

@section('content')
	
		{{-- expr --}}
	<p>
		<a href="{{route('article.create')}}">
			<button type="button" class="btn btn-default btn-lg">
					<span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span>
			</button>
		</a>
	</p>
	@if (count($article) > 0)
		<div class="list-group">

			@foreach ($article as $element)
				<a href="{{ route('article.show', [$element->slug]) }}" class="list-group-item">
					<h3>{{$element->title}}</h3>
					<p class="list-group-item-text">{{$element->intro}}</p>
				</a>
			@endforeach	

		</div>
	@else
		<a href="{{ route('article.create') }}"><h3>You don't have any articles yet! Start by creating a new one!</h3></a>
	@endif
	

@stop