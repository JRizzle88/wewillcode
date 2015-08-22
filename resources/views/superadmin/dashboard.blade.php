@extends('layout.superadmin')

@section('content')
	<div class="dashboard">
    <div class="row quick-reports">
		  <div class="col s12 m6 l3 center-align">
        <span class="count-badge circle green z-depth-1">{{$activeCount}}</span>
        <p class="count-label">Active Users</p>
      </div>
      <div class="col s12 m6 l3 center-align">
        <span class="count-badge circle blue z-depth-1">{{$freelancerCount}}</span>
        <p class="count-label">Freelancers</p>
      </div>
      <div class="col s12 m6 l3 center-align">
        <span class="count-badge circle purple z-depth-1">{{$subscriberCount}}</span>
        <p class="count-label">Subscribers</p>
      </div>
      <div class="col s12 m6 l3 center-align">
        <span class="count-badge circle orange z-depth-1">{{$inactiveCount}}</span>
        <p class="count-label">Inactive Users</p>
      </div>
    </div>
    <div class="row">
		  <div class="col s12 m6">
        	<div class="card grey lighten-5">
              <div class="card-content">
                  <span class="card-title">Latest Users</span>
                  <ul class="collection">
                      @foreach($latestUsers as $u)
                         <li class="collection-item">
                           <div>{{$u->first_name}} {{$u->last_name}} 
                              <a href="#!" class="secondary-content btn btn-xsmall green tooltipped" data-position="bottom" data-delay="20" data-tooltip="Resend Activation"><i class="material-icons">send</i></a>
                              <a href="#!" class="secondary-content btn btn-xsmall blue tooltipped" data-position="bottom" data-delay="20" data-tooltip="Profile"><i class="material-icons">person_pin</i></a>
                           </div>
                         </li>
                      @endforeach
                  </ul>
                  <div class="card-action">
                    <a href="#" class="btn btn-small waves-effect waves-light white-text green"><i class="fa fa-plus"></i></a>
                    <a href="#" class="btn btn-small waves-effect waves-light white-text purple"><i class="fa fa-envelope"></i> Invite</a>       
                    <a href="{{ url('superadmin/users') }}" class="btn btn-small waves-effect waves-light white-text blue right"><i class="fa fa-eye"></i></a>
                  </div> 
              </div>
          </div>
      </div>
      
      <div class="col s12 m6">
        	<div class="card grey lighten-5">
              <div class="card-content">
                  <span class="card-title">Latest Subscribers</span>
                  <ul class="collection">
                      @foreach($latestSubscribers as $s)
                         <li href="#!" class="collection-item">
                           <div>{{$u->first_name}} {{$u->last_name}}
                              <a href="#!" class="secondary-content btn btn-xsmall blue tooltipped" data-position="bottom" data-delay="20" data-tooltip="Profile"><i class="material-icons">person_pin</i></a>
                           </div>
                         </li>
                      @endforeach
                  </ul>
                  <div class="card-action">
                    <a href="#" class="btn btn-small waves-effect waves-light white-text light-blue"><i class="fa fa-line-chart"></i></a>
                    <a href="#" class="btn btn-small waves-effect waves-light white-text blue right"><i class="fa fa-eye"></i></a>
                  </div> 
              </div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6">
        	<div class="card grey lighten-5">
              <div class="card-content">
                  <span class="card-title">Latest Posts</span>
                  <ul class="collection">
                      @foreach($latestPosts as $p)
                         <li href="#!" class="collection-item">
                           <div>{{$p->name}}
                              <a href="{{ route('posts.show', $p->slug) }}" class="secondary-content btn btn-xsmall blue tooltipped" data-position="bottom" data-delay="20" data-tooltip="View"><i class="material-icons">visibility</i></a>
                              <a href="{{ route('superadmin.posts.edit', $p->slug) }}" class="secondary-content btn btn-xsmall orange tooltipped" data-position="bottom" data-delay="20" data-tooltip="Edit"><i class="material-icons">more_vert</i></a>
                           </div>  
                         </li>
                      @endforeach
                  </ul>
                  <div class="card-action">
                    <a href="{{ route('superadmin.posts.create') }}" class="btn btn-small waves-effect waves-light white-text green"><i class="fa fa-plus"></i></a>
                    <a href="{{ route('superadmin.posts.index') }}" class="btn btn-small waves-effect waves-light white-text blue right"><i class="fa fa-eye"></i></a>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="col s12 m6">
        	<div class="card grey lighten-5">
              <div class="card-content">
                  <span class="card-title">Latest Pages</span>
                  <ul class="collection">
                      @foreach($latestPages as $p)
                         <li href="#!" class="collection-item">
                           <div>{{$p->name}}
                              <a href="{{ route('pages.show', $p->slug) }}" class="secondary-content btn btn-xsmall blue tooltipped" data-position="bottom" data-delay="20" data-tooltip="View"><i class="material-icons">visibility</i></a>
                              <a href="{{ route('superadmin.pages.edit', $p->slug) }}" class="secondary-content btn btn-xsmall orange tooltipped" data-position="bottom" data-delay="20" data-tooltip="Edit"><i class="material-icons">more_vert</i></a>
                           </div>  
                         </li>
                      @endforeach
                  </ul>
                  <div class="card-action">
                    <a href="{{ route('superadmin.pages.create') }}" class="btn btn-small waves-effect waves-light white-text green"><i class="fa fa-plus"></i></a>
                    <a href="{{ route('superadmin.pages.index') }}" class="btn btn-small waves-effect waves-light white-text blue right"><i class="fa fa-eye"></i></a>
                  </div>
              </div>
          </div>
      </div>                
    </div>	
	</div>	   
@endsection