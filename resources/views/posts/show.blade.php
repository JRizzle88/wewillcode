@extends('layout.default')

@section('content')

@if($post->isDefaultLayout())
<div class="container">
	<h1>{{ $post->name }}</h1>
	<small>{{ date("F jS, Y",strtotime($post->created_at)) }}</small>
	{!!html_entity_decode($post->content)!!}
</div>
@endif

@if($post->isFullWidthLayout())
	<h1>{{ $post->name }}</h1>
	<small>{{ date("F jS, Y",strtotime($post->created_at)) }}</small>
	{!!html_entity_decode($post->content)!!}
@endif

@if($post->isLeftSidebarLayout())
<div class="container">
	<div class="row">
		<div class="col s12 m3 l3">
			left sidebar	
		</div>
		<div class="col s12 m9 l9">
			<h1>{{ $post->name }}</h1>
			<small>{{ date("F jS, Y",strtotime($post->created_at)) }}</small>
			{!!html_entity_decode($post->content)!!}
		</div>
	</div>
</div>
@endif

@if($post->isRightSidebarLayout())
<div class="container">
	<div class="row">
		<div class="col s12 m9 l9">
			<h1>{{ $post->name }}</h1>
			<small>{{ date("F jS, Y",strtotime($post->created_at)) }}</small>
			{!!html_entity_decode($post->content)!!}
		</div>
		<div class="col s12 m3 l3">
			right sidebar	
		</div>
	</div>
</div>
@endif

@endsection