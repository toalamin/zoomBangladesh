<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Zoom Bangladesh - @yield('title')</title>
	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta name="csrf-token" id="_token" content="{{ csrf_token() }}">

	<link href="{{ asset('frontant/assets/img/favicon.ico') }}" rel="icon">
	@include('backend_layouts._partials.css')
	@yield('css')
</head>

<body class="no-skin">

	@include('backend_layouts._partials.topbar')
	@include('sweet::alert')
	<!-- /section:basics/navbar.layout -->
	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try {
				ace.settings.loadState('main-container')
			} catch (e) {}
		</script>

		@include('backend_layouts._partials.leftbar')

		<!-- /section:basics/sidebar -->
		<div class="main-content">
			<div class="main-content-inner" style="min-height: 1000px!important;">
				<!-- #section:basics/content.breadcrumbs -->



				@yield('content')


			</div>
		</div><!-- /.main-content -->

		<div class="footer">
			<div class="footer-inner">
				<!-- #section:basics/footer -->
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">Zoom Bangladesh</span>
						Md.Al Amin &copy; <?php echo date('Y'); ?>-<?php echo date('Y'); ?>
					</span>

					&nbsp; &nbsp;
					<span class="action-buttons">
						<a href="#">
							<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
						</a>
					</span>
				</div>

				<!-- /section:basics/footer -->
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->


	@include('backend_layouts._partials.js')
	@include('sweetalert::alert')
	
	@yield('script')

</body>

</html>