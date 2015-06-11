@extends('layout')

@section('content')

	<h3>Edit an article</h3>
	{!! Form::model($article, ['url' => route('article.update',$article->slug), 'method' => 'PATCH']) !!}
	<div class="form-group {{ $errors->has('title') ? 'has-error':'' }}">
		{!! Form::label('Title : ') !!}
		{!! $errors->first('title',' <span class="help-block">:message</span>') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group {{ $errors->has('title') ? 'has-error':'' }}">
		{!! Form::label('Intro :') !!}
		{!! $errors->first('intro',' <span class="help-block">:message</span>') !!}
		{!! Form::text('intro', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group {{ $errors->has('title') ? 'has-error':'' }}">
		{!! Form::label('description :') !!}
		{!! $errors->first('description',' <span class="help-block">:message</span>') !!}
		{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	</div>
	<button type="submit" class="btn btn-default btn-lg">
			<span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>
	</button>
	{!! Form::close() !!}

@stop