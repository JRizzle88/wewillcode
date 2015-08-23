@extends('layout.default')

@section('content')
<div class="container">
<h1 class="wwc-green-text">WOOPS!</h1>
<p>Check out our other posts ...</p>
<ul>
@foreach($posts as $p)
	<li><a href="{{$p->slug}}">{{ $p->name }}</a></li>
@endforeach
</ul>
</div>
@endsection
