@extends('layout.superadmin')

@section('content')
	<div class="superadmin-pages">
		<div class="container">
			<div class="card grey lighten-5">
				<div class="card-content">
					<span class="card-title">PAGES</span>
					<p>{!! link_to_route('superadmin.pages.create', 'New Page', '', array('class'=>'btn btn-small green')) !!}</p>
					@if ( !$pages->count() )
						You have no pages created.
					@else
						<ul class="collection">
							@foreach( $pages as $p )
							<li class="collection-item">
								<div>
								
								@if($p->draft == 1)
									<a href="{{ route('admin.pages.edit', $p->slug) }}">
										<span class="text-warning"><i class="fa fa-exclamation-triangle"></i> Draft</span> - {{ $p->name }}
									</a>
								@else
									<a href="{{ route('pages.show', $p->slug) }}">
										<i class="fa fa-check"></i> {{ $p->name }}
									</a>
								@endif
								
								<!--<span class="slug">Slug: {{ $p->slug }}</span>
								<span class="created-at">Created: {{ $p->created_at }}</span>-->
								
								{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('superadmin.pages.destroy', $p->slug))) !!}
									<!--<div class="secondary-content post-actions" role="group" aria-label="...">-->
										{!! Form::button('<i class="fa fa-times text-danger"></i>', array('type' => 'submit', 'class' => 'btn btn-xsmall red secondary-content')) !!}
								{!! Form::close() !!}		
										{!! link_to_route('superadmin.pages.edit', '', $p->slug, array('class' => 'btn btn-xsmall fa fa-edit orange secondary-content')) !!}
										{!! link_to_route('pages.show', '', $p->slug, array('class' => 'btn btn-xsmall fa fa-eye blue secondary-content')) !!}
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
