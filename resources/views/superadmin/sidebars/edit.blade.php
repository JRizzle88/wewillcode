@extends('layout.superadmin')

@section('content')
<div class="superadmin-sidebars">
	<div class="container">
		<div class="card grey lighten-5">
			<div class="card-content">
				<span class="card-title">EDIT SIDEBAR</span>
				<div class="row">
					<div class="col s12 m5 l5">
						{!! Form::model($sidebar, ['method' => 'PATCH', 'route' => ['superadmin.sidebars.update', $sidebar->id]]) !!}
							@include('superadmin.sidebars.partials._form', ['submit_text' => 'Update Sidebar'])
						{!! Form::close() !!}
					</div>
					<div class="col s12 m7 l7">
						@if ( !$sidebars->count() )
							You have no Sidebars created.
						@else
							<ul class="collapsible">
								@foreach($sidebars as $s)
									<li>
										<div class="collapsible-header">
											@if($s->active == 1)
												<i class="fa fa-check wwc-green-text"></i>
											@else
												<i class="fa fa-exclamation-triangle"></i>
											@endif
											{{ $s->name }}
											
										</div>
										<div class="collapsible-body">
											<p><small><em>{{ $s->description }}</em></small>
												{!! Form::open(array('class' => '', 'method' => 'DELETE', 'route' => array('superadmin.sidebars.destroy', $s->id))) !!}
												<!--<div class="secondary-content post-actions" role="group" aria-label="...">-->
												{!! Form::button('', array('type' => 'submit', 'class' => 'delete btn btn-xsmall fa fa-times red right')) !!}
												{!! Form::close() !!}
												{!! link_to_route('superadmin.sidebars.edit', '', $s->id, array('class' => 'edit btn btn-xsmall fa fa-edit orange right')) !!}
											</p>
										</div>
									</li>
								@endforeach
							</ul>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection