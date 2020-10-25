<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <!-- Meta Tags -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="eCharity - Nonprofit, Crowdfunding & Charity HTML5 Template" />
  <meta name="keywords" content="Charity,Nonprofit,Crowdfunding,Donation & Fundraising" />
  <meta name="author" content="ThemeMascot" />
  <!-- Page Title -->
  <title>Zoom Bangladesh @yield('title')</title>
  @include('frontant_layouts._partials.css')
  @yield('css')
</head>
<body class="">
  <div id="wrapper">
    <!-- preloader -->
    <div id="preloader">
      <div id="spinner">
        <i class="flaticon-charity-shelter font-60 text-theme-colored floating"></i>
        <h5 class="line-height-50 font-18">Loading...</h5>
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>
    <!-- Header -->
    <header class="header">
      @include('frontant_layouts._partials.headertop')
      @include('frontant_layouts._partials.menu')
    </header>
    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: home -->
      <section id="home">
        <div class="container-fluid p-0">
          <!-- Slider Revolution Start -->
          @include('frontant_layouts._partials.slider')
          <!-- Slider Revolution Ends -->
        </div>
      </section>
      @yield('content')
    </div>
    <!-- end main-content -->
    <!-- Footer -->
    @include('frontant_layouts._partials.footer')
    @include('sweetalert::alert')
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  @include('frontant_layouts._partials.js')
  @yield('js')
</body>

</html>