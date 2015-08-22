@extends('layout.default')

@section('content')
<p>
<h4>{{ $page->name }} </h4>
{!!html_entity_decode($page->content)!!}
</p>
@endsection