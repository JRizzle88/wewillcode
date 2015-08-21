@extends('layout.superadmin')

@section('content')
		<div class="superadmin-edit-pages">
			<div class="container">
				<div class="card grey lighten-5">
					<div class="card-content">
						<span class="card-title"><i class="fa fa-edit"></i> EDIT PAGE</span>
						<p>
							<a type="button" class="btn btn-small tooltipped" data-position="bottom" data-delay="20" data-tooltip="Preview"><i class="material-icons">visibility</i></a>
							<a type="button" class="btn btn-small red right tooltipped" data-position="bottom" data-delay="20" data-tooltip="Delete"><i class="fa fa-times"></i></a>
						</p>
							
						<!--<span><a href="{{ url('admin/pages') }}" class="btn btn-primary btn-sm">Back to Pages</a></span>-->
						{!! Form::model($page, ['method' => 'PATCH', 'route' => ['superadmin.pages.update', $page->slug]]) !!}
							@include('superadmin/pages/partials/_form', ['submit_text' => 'Save'])
						{!! Form::close() !!}
						<!--<p>
						@if($page->draft == 1)
							<span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Your page is a Draft.</span>
						@else
							<span class="text-success">Your page is Published!</span>
						@endif
						</p>-->
					</div>
				</div>
			</div>
      	</div>
@endsection
