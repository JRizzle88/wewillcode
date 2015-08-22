@extends('layout.superadmin')

@section('content')
	<div class="superadmin-users">
		<div class="container">
			<div class="card grey lighten-5">
				<div class="card-content">
					<span class="card-title">USERS</span>
					<!--<p>{!! link_to_route('superadmin.pages.create', 'New Page', '', array('class'=>'btn btn-small green')) !!}</p>-->
					@if ( !$users->count() )
						You have no pages created.
					@else
						<ul class="collection">
							@foreach( $users as $u )
							<li class="collection-item">
								<div>
								
								{{ $u->first_name }} {{ $u->last_name }}
								
								
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
