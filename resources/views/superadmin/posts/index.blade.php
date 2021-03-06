@extends('layout.superadmin')

@section('content')
	<div class="superadmin-posts">
		<div class="container">
			<div class="card grey lighten-5">
				<div class="card-content">
					<span class="card-title">POSTS</span>
					<p>{!! link_to_route('superadmin.posts.create', 'New Post', '', array('class'=>'btn btn-small green')) !!}</p>
					@if ( !$posts->count() )
						You have no posts created.
					@else
						<ul class="collection">
							@foreach( $posts as $p )
							<li class="collection-item">
								<div>
								
								@if($p->draft == 1)
									<a href="{{ route('superadmin.posts.edit', $p->slug) }}">
										<span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Draft</span> - {{ $p->name }}
									</a>
								@else
									<a href="{{ route('posts.show', $p->slug) }}">
										<i class="fa fa-check"></i> {{ $p->name }}
									</a>
								@endif
								
								<!--<span class="slug">Slug: {{ $p->slug }}</span>
								<span class="created-at">Created: {{ $p->created_at }}</span>-->
								<span class="layout">@include('superadmin.posts.partials._index_layout_thumb')</span>
							
								
								@if($p->isSidebarEligible())
									@if($p->sidebar)
										<span class="layout">Sidebar: {{ $p->sidebar->name }}</span>
									@endif
								@endif
								
								{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('superadmin.posts.destroy', $p->slug))) !!}
									<!--<div class="secondary-content post-actions" role="group" aria-label="...">-->
										{!! Form::button('<i class="fa fa-times text-danger"></i>', array('type' => 'submit', 'class' => 'delete btn btn-xsmall red secondary-content')) !!}
								{!! Form::close() !!}		
										{!! link_to_route('superadmin.posts.edit', '', $p->slug, array('class' => 'edit btn btn-xsmall fa fa-edit orange secondary-content')) !!}
										{!! link_to_route('posts.show', '', $p->slug, array('class' => 'show btn btn-xsmall fa fa-eye blue secondary-content')) !!}
									<!--</div>-->
								</div>
								
							</li>
							@endforeach
						</ul>
					@endif
         <!-- <p>{!! link_to_route('superadmin.pages.create', 'New Page', '', array('class'=>'btn btn-success btn-sm')) !!}</p>-->

        		</div>
      		</div>
    	</div>
	</div>
@endsection
