@extends('layout.dashboard')

@section('content')
	<div class="row dashboard">
		  <div class="col s12">
        	<div class="card grey lighten-5">
              <div class="card-content">
                  @if(\Session::token())
                    <i class="session material-icons green white-text right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Valid Session!">thumb_up</i>
                  @else
                    <i class="session material-icons red white-text right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Invalid Session!">thumb_down</i>
                  @endif
                  
              </div>
              <!--<div class="card-action">
                <a href="#" class="btn waves-effect waves-light white-text red lighten-1">Cancel</a>
                <a href="#" class="btn waves-effect waves-light white-text blue darken-1">Save</a>
              </div>-->
          </div>
      </div>	
	</div>	   
@endsection