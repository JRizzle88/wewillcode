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
                  <h4>Let's Get Started</h4>
                  <table class="striped">
                    <thead>
                      <tr>
                          <th data-field="id">Project Name</th>
                          <th data-field="price">Type</th>
                          <th data-field="name">Status</th>
                          <th data-field="collaboratos">Collaborators</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td>3</td>
                        <td class="project-table-actions">
                          <a href="" class="btn blue white-text"><i class="fa fa-edit"></i></a>
                          <a href="" class="btn green white-text"><i class="fa fa-eye"></i></a>
                          <a href="" class="btn red white-text"><i class="fa fa-times"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <!--<div class="card-action">
                <a href="#" class="btn waves-effect waves-light white-text red lighten-1">Cancel</a>
                <a href="#" class="btn waves-effect waves-light white-text blue darken-1">Save</a>
              </div>-->
          </div>
      </div>	
	</div>	   

@endsection