@extends('layout.default')

@section('content')
  <div class="row account">
		  <div class="col s12">
        	<div class="card grey lighten-5">
              <div class="card-content">
                  @if(\Session::token())
                    <i class="session material-icons green white-text right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Valid Session!">thumb_up</i>
                  @else
                    <i class="session material-icons red white-text right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Invalid Session!">thumb_down</i>
                  @endif
                  <h5>Hello {{Auth::user()->name}}</h5>
                  <p><b>Email:</b> {{Auth::user()->email}}</p>
                  <p><b>Profession:</b></p>
                  <p></p>
                  
              </div>
          </div>
      </div>	
	</div>	   

@endsection