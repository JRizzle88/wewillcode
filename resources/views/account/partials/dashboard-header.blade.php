<div class="">
	<nav>
		<div class="nav-wrapper blue darken-2">
			<a href="#" data-activates="slide-out" class="button-collapse admin"><i class="material-icons">reorder</i></a>
			<div class="container">
				<a href="{{ url('/') }}" class="brand-logo">Studios</a>
			</div>
		</div>
	</nav> 
</div>
<ul id="slide-out" class="side-nav fixed blue darken-2 z-depth-0">   
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
</ul>