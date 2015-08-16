<div class="">
	<nav>
		<div class="nav-wrapper blue darken-2">
			<a href="#" data-activates="slide-out" class="button-collapse admin"><i class="material-icons">reorder</i></a>
			<div class="container">
				<a href="{{ url('/') }}" class="brand-logo">Studios</a>
        <ul class="right">
          <li><a href="{{ url('/') }}" class="dropdown-button right" data-beloworigin="true" data-activates="account-dropdown"><i class="fa fa-gear"></i> </a></li>
			  </ul>
        <!-- Account Dropdown -->
        <ul id="account-dropdown" class="dropdown-content">
          <li><a href="{{ url('account') }}">Profile</a></li>
          <li><a href="{{ url('account/dashboard') }}">Dashboard</a></li>
          <li><a href="#!">Projects</a></li>
          <li><a href="#!">Settings</a></li>
          <li><a href="{{ url('auth/logout') }}" class="red white-text lighten-1">Logout</a></li>
        </ul>
      </div>
		</div>
	</nav> 
</div>
<ul id="slide-out" class="side-nav fixed grey darken-4 z-depth-0">   
	<li><a class="dropdown-button waves-effect waves-light" href="#" data-beloworigin="true" data-activates="users-dropdown">Users<i class="fa fa-arrow-down right"></i></a></li>
    <ul id='users-dropdown' class='dropdown-content blue'>
      <li><a href="#!">Super Admins</a></li>
      <li><a href="#!">Admins</a></li>
      <li><a href="#!">Freelancers</a></li>
      <li><a href="#!">Subscribers</a></li>
	  <li><a href="#!">Users</a></li>
    </ul>   
	<li><a class="dropdown-button waves-effect waves-light" href="#" data-beloworigin="true" data-activates="posts-dropdown">Posts<i class="fa fa-arrow-down right"></i></a></li>
    <ul id='posts-dropdown' class='dropdown-content blue'>
      <li><a href="#!">View All</a></li>
      <li><a href="#!">Create New</a></li>
    </ul>
	<li><a class="dropdown-button waves-effect waves-light" href="#" data-beloworigin="true" data-activates="pages-dropdown">Pages<i class="fa fa-arrow-down right"></i></a></li>
    <ul id='pages-dropdown' class='dropdown-content blue'>
      <li><a href="#!">View All</a></li>
      <li><a href="#!">Create New</a></li>
    </ul>
	<li><a class="dropdown-button waves-effect waves-light" href="#" data-beloworigin="true" data-activates="media-dropdown">Media<i class="fa fa-arrow-down right"></i></a></li>
    <ul id='media-dropdown' class='dropdown-content blue'>
      <li><a href="#!">View All</a></li>
      <li><a href="#!">Upload New</a></li>
    </ul>
	<li><a class="dropdown-button waves-effect waves-light" href="#" data-beloworigin="true" data-activates="settings-dropdown">Settings<i class="fa fa-arrow-down right"></i></a></li>
    <ul id='settings-dropdown' class='dropdown-content blue'>
      <li><a href="#!">Global</a></li>
	    <li><a href="#!">Maintenance</a></li>
	    <li><a href="#!">Server Resources</a></li>
    </ul>
  <li class="left-nav-information">
    @if(\Session::token())
      <i class="session material-icons green white-text right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Valid Session!">thumb_up</i>
    @else
      <i class="session material-icons red white-text right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Invalid Session!">thumb_down</i>
    @endif
  </li>
</ul>