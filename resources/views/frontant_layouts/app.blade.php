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

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fb2bad80863900e88c94473/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- GetButton.io widget -->
<script type="text/javascript">
(function () {
var options = {
facebook: "1064515673595542", // Facebook page ID
whatsapp: "01618216985", // WhatsApp number
call_to_action: "Message us", // Call to action
button_color: "#E74339", // Color of button
position: "left", // Position may be 'right' or 'left'
order: "facebook,whatsapp", // Order of buttons
};
var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /GetButton.io widget -->



</body>

</html>