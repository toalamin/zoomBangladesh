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
						Mission
					</a>

				</li>
				<li class="">
					<a href="{{ route('help.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						How Can Help
					</a>

				</li>

				<li class="">
					<a href="{{ route('monthly.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Month of Employee
					</a>
				</li>

				<li class="">
					<a href="{{ route('sponsor.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Sponsor
					</a>
				</li>

				<li class="">
					<a href="{{ route('people.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						People Say
					</a>
				</li>

			</ul>
		</li>


		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-table"></i>
				<span class="menu-text">
					About Us
				</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{ route('gallery.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Gallery Category
					</a>
				</li>

				<li class="">
					<a href="{{ route('team.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Team Category </a>
				</li>
				<li class="">
					<a href="{{ route('teamm.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Team </a>
				</li>

				<li class="">
					<a href="{{ route('photo.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Photo Gallery
					</a>
				</li>


				<li class="">
					<a href="{{ route('video.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Video Gallery
					</a>

				</li>
				<li class="">
					<a href="{{ route('faq.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						FAQ
					</a>
				</li>



				<li class="">
					<a href="{{ route('legality.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Legality
					</a>
				</li>

			</ul>
		</li>


		<!-- <li class="">
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
		</li> -->


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
				<i class="menu-icon fa fa-child"></i>
				<span class="menu-text">
					Child Sponsoor
				</span>
				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
				<li class="">
					<a href="{{ route('child.create') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Add New
					</a>
				</li>
				<li class="">
					<a href="{{ route('child.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						All List
					</a>
				</li>

				<li class="">
					<a href="{{ route('featured.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Sponsoor Child Featured
					</a>
				</li>
			</ul>
		</li>





		<!-- <li class="">
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
		</li> -->













		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text">
					Project
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">


				<li class="">
					<a href="{{ route('projectCategory.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Project Category
					</a>
				</li>
				<!-- <li class="">
					<a href="{{ route('project.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Project List
					</a>
				</li> -->
				<li class="">
					<a href="{{ route('fundraise.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Fund Raise
					</a>
				</li>
			</ul>
		</li>







		<!-- <li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-envelope"></i>
				<span class="menu-text">
					Header Image
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{ route('header.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						List
					</a>
				</li>
			</ul>
		</li> -->

		@if(Auth::user()->user_type == 1)

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-user-plus"></i>
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
				<i class="menu-icon fa fa-user-plus"></i>
				<span class="menu-text">
					Donation
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{ route('donation.list') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						People Donation List
					</a>
				</li>
				<li class="">
					<a href="{{ route('current.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Current Donation
					</a>
				</li>
			</ul>
		</li>
		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pie-chart"></i>
				<span class="menu-text">
					Account
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="{{ route('account.index') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						List
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

				<li class="">
					<a href="{{ route('index.systemConfig') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						System Config
					</a>
				</li>
			</ul>
		</li>
		@endif
	</ul><!-- /.nav-list -->

	<!-- #section:basics/sidebar.layout.minimize -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<!-- /section:basics/sidebar.layout.minimize -->
</div>