@extends('layout.default')

@section('content')
<p>
<h4>{{ $page->name }} </h4>
{{ $page->content }}
</p>
@endsection