@extends('layout.default')

@section('content')

@if($page->isDefaultLayout())
<div class="container">
	<h1>{{ $page->name }}</h1>
	<small>{{ date("F jS, Y",strtotime($page->created_at)) }}</small>
	{!!html_entity_decode($page->content)!!}
</div>
@endif

@if($page->isFullWidthLayout())
	<h1>{{ $page->name }}</h1>
	<small>{{ date("F jS, Y",strtotime($page->created_at)) }}</small>
	{!!html_entity_decode($page->content)!!}
@endif

@if($page->isLeftSidebarLayout())
<div class="container">
	<div class="row">
		<div class="col s12 m3 l3">
			left sidebar	
		</div>
		<div class="col s12 m9 l9">
			<h1>{{ $page->name }}</h1>
			<small>{{ date("F jS, Y",strtotime($page->created_at)) }}</small>
			{!!html_entity_decode($page->content)!!}
		</div>
	</div>
</div>
@endif

@if($page->isRightSidebarLayout())
<div class="container">
	<div class="row">
		<div class="col s12 m9 l9">
			<h1>{{ $page->name }}</h1>
			<small>{{ date("F jS, Y",strtotime($page->created_at)) }}</small>
			{!!html_entity_decode($page->content)!!}
		</div>
		<div class="col s12 m3 l3">
			right sidebar	
		</div>
	</div>
</div>
@endif

@endsection