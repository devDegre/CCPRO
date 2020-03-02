<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->

@hasrole("Admin")

	<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>




<li class="nav-item"> <a class="nav-link" href="{{ backpack_url('dashboard') }}" > <i class="fa fa-volume-control-phone nav-icon"></i><button type="s" class="nh_button btn btn-circle btn-outline-info  "> <span aria-hidden="true"></span> &nbsp;Appel Entrant</button></a></li>

<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-lock"></i> Authentication</a>
	<ul class="nav-dropdown-items">
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user-circle"></i> <span>Utilisateurs</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-users"></i> <span>Rôles</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon fa fa-key"></i> <span>Permissions</span></a></li>
	</ul>
</li>

<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-anchor"></i> Call Center Pro</a>
	<ul class="nav-dropdown-items">
  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('client') }}"><i class="nav-icon fa fa-street-view"></i> <span>Clients</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('call') }}"><i class="nav-icon fa fa-phone"></i> <span>Appels</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon fa fa-list"></i> <span>Catégores</span></a></li>
	</ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-folder"></i> <span>Fichiers</span></a></li>
{{ csrf_field() }}
@else
		@hasrole("Agent")
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

		<li class="nav-item"> <input type="text" id="Action">			</li>



		<li class="nav-item"> <a class="nav-link" href="{{ backpack_url('dashboard') }}" > <i class="fa fa-volume-control-phone nav-icon"></i><button type="s" class="nh_button btn btn-circle btn-outline-info  "> <span aria-hidden="true"></span> &nbsp;Appel Entrant</button></a></li>
		<li class="nav-item"> <a class="nav-link" href="{{ backpack_url('dashboard') }}" > <i class="fa fa-phone-square nav-icon"></i><button type="s" class=" btn btn-circle btn-outline-info MakeCall  "> <span aria-hidden="true"></span> &nbsp;Appel Sortant</button></a></li>

	{{ csrf_field() }}
		@endhasrole

@endhasrole


@hasrole('Superviseur')
		
 <li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>




<li class="nav-item"> <a class="nav-link" href="{{ backpack_url('dashboard') }}" > <i class="fa fa-volume-control-phone nav-icon"></i><button type="s" class="nh_button btn btn-circle btn-outline-info  "> <span aria-hidden="true"></span> &nbsp;Appel Entrant</button></a></li>

<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-lock"></i> Authentication</a>
	<ul class="nav-dropdown-items">
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon fa fa-user-circle"></i> <span>Utilisateurs</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon fa fa-users"></i> <span>Rôles</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon fa fa-key"></i> <span>Permissions</span></a></li>
	</ul>
</li>

<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon fa fa-anchor"></i> Call Center Pro</a>
	<ul class="nav-dropdown-items">
  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('client') }}"><i class="nav-icon fa fa-street-view"></i> <span>Clients</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('call') }}"><i class="nav-icon fa fa-phone"></i> <span>Appels</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon fa fa-list"></i> <span>Catégores</span></a></li>
	</ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon fa fa-folder"></i> <span>Fichiers</span></a></li>
{{ csrf_field() }}
@endhasrole













<!--<li class="treeview">
                <a href="#"><i class="fa fa-get-pocket"></i> <span>Authentification</span> <i class="fa
                  fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    

                <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Utilisateurs</span></a></li>

                <li><a href="{{ backpack_url('role') }}"><i class="fa fa-users"></i> <span>Rôles</span></a></li>

                <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>

                
                       
                    </ul>

</li> -->
