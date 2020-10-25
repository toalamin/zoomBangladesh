<!-- #section:basics/sidebar -->
<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try {
			ace.settings.loadState('sidebar')
		} catch (e) {}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<!-- #section:basics/sidebar.layout.shortcuts -->
			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>

			<!-- /section:basics/sidebar.layout.shortcuts -->
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		<li class="active">
			<a href="{{ route('dashboard') }}">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>


		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-home"></i>
				<span class="menu-text">
					Home Page
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">


				<li class="">
					<a href="{{ route('slider.page') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Slider
					</a>
				</li>
				<li class="">
					<a href="{{ route('mission.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Mission & Vission
					</a>

				</li>

				<li class="">
					<a href="{{ route('history.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						History
					</a>
				</li>

				<li class="">
					<a href="{{ route('historical.place.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Historical Place
					</a>

					
				</li>

				<li class="">
					<a href="{{ route('eminent.people.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Eminent People
					</a>

					
				</li>


			</ul>
		</li>
		

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-bell"></i>
				<span class="menu-text">
					Notice
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">


				<li class="">
					<a href="{{ route('notice.create') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Add New Notice
					</a>
				</li>
				<li class="">
					<a href="{{ route('notice.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Notice List
					</a>

				</li>



			</ul>
		</li>


		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-bell"></i>
				<span class="menu-text">
					Update
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">


				<li class="">
					<a href="{{ route('update.create') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Add New Update
					</a>
				</li>
				<li class="">
					<a href="{{ route('update.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Update List
					</a>

				</li>



			</ul>
		</li>
<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-user"></i>
				<span class="menu-text">
					Speech
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">


				<li class="">
					<a href="{{ route('speech.create') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Add New Speech
					</a>
				</li>
				<li class="">
					<a href="{{ route('speech.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Speech List
					</a>

				</li>



			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-picture-o"></i>
				<span class="menu-text">
					Photo
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">


				<li class="">
					<a href="{{ route('photo.create') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Add New Photo
					</a>
				</li>
				<li class="">
					<a href="{{ route('photo.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Photo List
					</a>

				</li>



			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-video-camera"></i>
				<span class="menu-text">
					Video
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">


				<li class="">
					<a href="{{ route('video.create') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Add New Video
					</a>
				</li>
				<li class="">
					<a href="{{ route('video.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Video List
					</a>

				</li>



			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					Member
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">


				<li class="">
					<a href="{{ route('member.create') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Add New Member
					</a>
				</li>
				<li class="">
					<a href="{{ route('member.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						 Member List
					</a>

				</li>



			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					Committee
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{ route('executive.committee.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Executive Committee
					</a>
				</li>
				<li class="">
					<a href="{{ route('adviser.committee.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						 Adviser Committee
					</a>

				</li>



			</ul>
		</li>


		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-envelope"></i>
				<span class="menu-text">
					Contact
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{ route('contact.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						 Contact List
					</a>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-user"></i>
				<span class="menu-text">
					User
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{ route('user.create') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Add New User
					</a>
				</li>
				<li class="">
					<a href="{{ route('user.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						 User List
					</a>
				</li>
			</ul>
		</li>

	</ul><!-- /.nav-list -->

	<!-- #section:basics/sidebar.layout.minimize -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<!-- /section:basics/sidebar.layout.minimize -->
</div>