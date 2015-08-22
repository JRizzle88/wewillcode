@extends('layout.superadmin')

@section('content')
		<div class="superadmin-new-pages">
			<div class="container">
				<div class="card grey lighten-5">
					<div class="card-content">
						<span class="card-title"><i class="fa fa-edit"></i> EDIT PAGE</span>
						<p>
							<!--<a type="button" class="btn btn-small tooltipped" data-position="bottom" data-delay="20" data-tooltip="Preview"><i class="material-icons">visibility</i></a>-->
							<a type="button" class="btn btn-small red right tooltipped" data-position="bottom" data-delay="20" data-tooltip="Cancel">Cancel</a>
						</p>						
						{!! Form::model(new App\Page, ['route' => ['superadmin.pages.store']]) !!}
							@include('superadmin/pages/partials/_form', ['submit_text' => 'Create Page'])
						{!! Form::close() !!}
        			</div>
				</div>
			</div>
      	</div>
@endsection
