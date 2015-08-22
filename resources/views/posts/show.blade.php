@extends('layout.default')

@section('content')
<p>
<h4>{{ $post->name }} </h4>
{{ $post->content }}
</p>
@endsection