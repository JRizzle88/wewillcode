@extends('layout.default')

@section('content')
<p>
<h4>{{ $post->name }} </h4>
<small>{{ date("F jS, Y",strtotime($post->created_at)) }}</small>
{!!html_entity_decode($post->content)!!}
</p>
@endsection