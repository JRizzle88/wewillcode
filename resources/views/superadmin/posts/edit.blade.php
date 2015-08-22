@extends('layout.superadmin')

@section('content')
		<div class="superadmin-edit-posts">
			<div class="container">
				<div class="card grey lighten-5">
					<div class="card-content">
						<span class="card-title"><i class="fa fa-edit"></i> EDIT POST</span>
						<p>
							<!--<a type="button" class="btn btn-small tooltipped" data-position="bottom" data-delay="20" data-tooltip="Preview"><i class="material-icons">visibility</i></a>-->
							<a type="button" class="btn btn-small red right tooltipped" data-position="bottom" data-delay="20" data-tooltip="Delete"><i class="fa fa-times"></i></a>
						</p>
							
						<!--<span><a href="{{ url('admin/posts') }}" class="btn btn-primary btn-sm">Back to Posts</a></span>-->
						{!! Form::model($post, ['method' => 'PATCH', 'route' => ['superadmin.posts.update', $post->slug]]) !!}
							@include('superadmin/posts/partials/_form', ['submit_text' => 'Save'])
						{!! Form::close() !!}
						<!--<p>
						@if($post->draft == 1)
							<span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Your post is a Draft.</span>
						@else
							<span class="text-success">Your post is Published!</span>
						@endif
						</p>-->
					</div>
				</div>
			</div>
      	</div>
@endsection
