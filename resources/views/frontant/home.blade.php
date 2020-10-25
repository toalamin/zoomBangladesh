@extends('frontant_layouts.app')
@section('title')
Welcome to sadullapur somity
@endsection

@section('css')


@endsection

@section('content')

<!-- @include('frontant_layouts._partials.slider') -->




<section id="home">
  <div class="container-fluid p-0">

    <div class="rev_slider_wrapper">
      <div class="rev_slider" data-version="5.0">
        <ul>

          <!-- SLIDE 1 -->
          <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontant/images/bg/bg4.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('frontant/images/bg/bg4.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent text-white font-raleway pl-30 pr-30" id="rs-1-layer-1" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['-90']" data-fontsize="['28']" data-lineheight="['54']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">For the poor children
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30" id="rs-1-layer-2" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['-20']" data-fontsize="['48']" data-lineheight="['70']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">raise your helping hand
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme text-white text-center" id="rs-1-layer-3" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['50']" data-fontsize="['16']" data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br> hardest places as a sign of God's unconditional love.
            </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption tp-resizeme" id="rs-1-layer-4" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['115']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Donate Now</a>
            </div>
          </li>

          <!-- SLIDE 2 -->
          <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontant/images/bg/bg5.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('frontant/images/bg/bg5.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway" id="rs-2-layer-1" data-x="['left']" data-hoffset="['30']" data-y="['middle']" data-voffset="['-110']" data-fontsize="['110']" data-lineheight="['120']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:700;">Donate
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20" id="rs-2-layer-2" data-x="['left']" data-hoffset="['35']" data-y="['middle']" data-voffset="['-25']" data-fontsize="['35']" data-lineheight="['54']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:600; border-radius: 30px;">For the poor children
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme text-white" id="rs-2-layer-3" data-x="['left']" data-hoffset="['35']" data-y="['middle']" data-voffset="['30']" data-fontsize="['16']" data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br> hardest places as a sign of God's unconditional love.
            </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption tp-resizeme" id="rs-2-layer-4" data-x="['left']" data-hoffset="['35']" data-y="['middle']" data-voffset="['95']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">Donate Now</a>
            </div>
          </li>

          <!-- SLIDE 3 -->
          <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('frontant/images/bg/bg7.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
            <!-- MAIN IMAGE -->
            <img src="{{ asset('frontant/images/bg/bg7.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            <!-- LAYERS -->

            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20" id="rs-3-layer-1" data-x="['right']" data-hoffset="['30']" data-y="['middle']" data-voffset="['-90']" data-fontsize="['64']" data-lineheight="['72']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:600;"><span class="">Help</span> The Poor
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway" id="rs-3-layer-2" data-x="['right']" data-hoffset="['35']" data-y="['middle']" data-voffset="['-25']" data-fontsize="['32']" data-lineheight="['54']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:600;">For Their Better Future
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme text-white text-right" id="rs-3-layer-3" data-x="['right']" data-hoffset="['35']" data-y="['middle']" data-voffset="['30']" data-fontsize="['16']" data-lineheight="['28']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Every day we bring hope to millions of children in the world's<br> hardest places as a sign of God's unconditional love.
            </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption tp-resizeme" id="rs-3-layer-4" data-x="['right']" data-hoffset="['35']" data-y="['middle']" data-voffset="['95']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="#">Donate Now</a>
            </div>
          </li>

        </ul>
      </div><!-- end .rev_slider -->
    </div>
    <!-- end .rev_slider_wrapper -->
    <script>
      $(document).ready(function(e) {
        $(".rev_slider").revolution({
          sliderType: "standard",
          sliderLayout: "auto",
          dottedOverlay: "none",
          delay: 5000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            },
            arrows: {
              style: "zeus",
              enable: true,
              hide_onmobile: true,
              hide_under: 600,
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 1200,
              tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 30,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 30,
                v_offset: 0
              }
            },
            bullets: {
              enable: true,
              hide_onmobile: true,
              hide_under: 600,
              style: "metis",
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 1200,
              direction: "horizontal",
              h_align: "center",
              v_align: "bottom",
              h_offset: 0,
              v_offset: 30,
              space: 5,
              tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
            }
          },
          responsiveLevels: [1240, 1024, 778],
          visibilityLevels: [1240, 1024, 778],
          gridwidth: [1170, 1024, 778, 480],
          gridheight: [600, 768, 960, 720],
          lazyType: "none",
          parallax: {
            origo: "slidercenter",
            speed: 1000,
            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
            type: "scroll"
          },
          shadow: 0,
          spinner: "off",
          stopLoop: "on",
          stopAfterLoops: 0,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "0",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      });
    </script>

  </div>
</section>































<!-- Section: welcome -->
<section>
  <div class="container pt-0 pb-0">
    <div class="section-content">
      <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
          <div class="sm-height-auto bg-theme-colored-lighter2">
            <div class="text-center pt-30 pb-sm-30">
              <div class="icon-box text-center">
                <a class="icon bg-white icon-circled icon-xl" style="background-color: red!important" href="#"> <i  style="color:white!important;" class="flaticon-charity-make-a-donation text-theme-colored"></i> </a>
                <div class="p-10">
                  <h4 class="text-uppercase text-white mt-0">Donate money</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, <br> conse ctetur adipisicing.</p>
                  <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Donate Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
          <div class="sm-height-auto bg-theme-colored-lighter4">
            <div class="text-center pt-30 pb-sm-30">
              <div class="icon-box text-center">
                <a class="icon bg-white icon-circled icon-xl" style="background-color: red!important" href="#"> <i  style="color:white!important;" class="flaticon-charity-hand-holding-a-stalk  text-theme-colored"></i></a>
                <div class="p-10">
                  <h4 class="text-uppercase text-white mt-0" >Become a Volunteer</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, <br> conse ctetur adipisicing.</p>
                  <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Join us Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay5">
          <div class="sm-height-auto bg-theme-colored-lighter3">
            <div class="text-center pt-30 pb-sm-30">
              <div class="icon-box text-center">
                <a class="icon bg-white icon-circled icon-xl" style="background-color: red!important" href="#"> <i  style="color:white!important;" class="flaticon-charity-dove-of-peace text-theme-colored"></i> </a>
                <div class="p-10">
                  <h4 class="text-uppercase text-white mt-0">Adopt a Child</h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, <br> conse ctetur adipisicing.</p>
                  <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay7">
          <div class="sm-height-auto bg-theme-colored">
            <div class="text-center pt-30 pb-sm-30">
              <div class="icon-box text-center">
                <a class="icon bg-white icon-circled icon-xl" style="background-color: red!important" href="#"> <i style="color:white!important;" class="flaticon-charity-responsible-use-of-water text-theme-colored"></i> </a>
                <div class="p-10">
                  <h4 class="text-uppercase text-white mt-0">Emergency Case</h4>
                  <h3 class="text-white">+(012) 345 6789</h3>
                  <a href="page-become-a-volunteer.html" class="btn btn-border btn-circled btn-transparent btn-sm">Contact Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Causes 1 -->
<section>
  <div class="container pb-80">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="mt-0 line-height-1 text-center">Our<span class="text-theme-colored"> Zoom Bangladesh Foundation</span></h2>
          <div class="separator separator-rouned">
            <i class="fa fa-cog fa-spin"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row mtli-row-clearfix">
        <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="causes maxwidth500 mb-sm-50">
            <div class="thumb">
              <img class="img-fullwidth" alt="" src="{{ asset('frontant/images/project/1.jpg') }}">
              <div class="donate-piechart piechart-absolute">
                <div class="piechart-block">
                  <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="65" data-linewidth="8">
                    <span class="percent text-white font-weight-700">0 </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="causes-details clearfix">
              <div class="p-30 p-sm-15 bg-lighter">
                <h4><a href="#">Sponsor a child today</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit. Illo, laudantium, accusantium impedit magnam nobis</p>
                <ul class="list-inline clearfix mt-20 mb-20">
                  <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                  <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                </ul>
                <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Donate Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="causes maxwidth500 mb-sm-50">
            <div class="thumb">
              <img class="img-fullwidth" alt="" src="{{ asset('frontant/images/project/2.jpg') }}">
              <div class="donate-piechart piechart-absolute">
                <div class="piechart-block">
                  <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="85" data-linewidth="8">
                    <span class="percent text-white font-weight-700">0 </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="causes-details clearfix">
              <div class="p-30 p-sm-15 bg-lighter">
                <h4><a href="#">Sponsor a child today</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit. Illo, laudantium, accusantium impedit magnam nobis</p>
                <ul class="list-inline clearfix mt-20 mb-20">
                  <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                  <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                </ul>
                <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Donate Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="causes maxwidth500 mb-sm-50">
            <div class="thumb">
              <img class="img-fullwidth" alt="" src="{{ asset('frontant/images/project/3.jpg') }}">
              <div class="donate-piechart piechart-absolute">
                <div class="piechart-block">
                  <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                    <span class="percent text-white font-weight-700">0 </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="causes-details clearfix">
              <div class="p-30 p-sm-15 bg-lighter">
                <h4><a href="#">Sponsor a child today</a></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit. Illo, laudantium, accusantium impedit magnam nobis</p>
                <ul class="list-inline clearfix mt-20 mb-20">
                  <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                  <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                </ul>
                <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Donate Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section: how can help? 3 -->
<section id="services" class="bg-lighter">
  <div class="container pb-60">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="title text-black-666">How <span class="text-theme-colored"> Can Help?</span></h2>

        </div>
      </div>
    </div>
    <div class="row mtli-row-clearfix">
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="service-block">
          <div class="thumb">
            <img src="{{ asset('frontant/images/services/1.jpg') }}" class="img-fullwidth" alt="">
            <div class="desc">
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, repudiandae...</p>
            </div>
          </div>
          <div class="content">
            <h4 class="mt-0 text-black">Give Donation</h4>
            <div class="mt-10"> <a href="#" class="btn btn-theme-colored btn-sm">Read More</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="service-block">
          <div class="thumb">
            <img src="{{ asset('frontant/images/services/2.jpg') }}" class="img-fullwidth" alt="">
            <div class="desc">
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, repudiandae...</p>
            </div>
          </div>
          <div class="content">
            <h4 class="mt-0 text-black">Become a Volenteer</h4>
            <div class="mt-10"> <a href="#" class="btn btn-theme-colored btn-sm">Read More</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="service-block">
          <div class="thumb">
            <img src="{{ asset('frontant/images/services/3.jpg') }}" class="img-fullwidth" alt="">
            <div class="desc">
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, repudiandae...</p>
            </div>
          </div>
          <div class="content">
            <h4 class="mt-0 text-black">Give a Scholarship</h4>
            <div class="mt-10"> <a href="#" class="btn btn-theme-colored btn-sm">Read More</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="service-block">
          <div class="thumb">
            <img src="{{ asset('frontant/images/services/4.jpg') }}" class="img-fullwidth" alt="">
            <div class="desc">
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, repudiandae...</p>
            </div>
          </div>
          <div class="content">
            <h4 class="mt-0 text-black">Adopt a Child</h4>
            <div class="mt-10"> <a href="#" class="btn btn-theme-colored btn-sm">Read More</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section: Donation -->
<section id="donation">
  <div class="container mt-0 pt-50">
    <div class="section-content">
      <div class="row">
        <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
          <h3 class="title text-black-666 line-bottom">Make a Donation <span class="text-theme-colored"> Now!</span></h3>

          <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->
          <form id="paypal_donate_form_onetime_recurring">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group mb-20">
                  <label><strong>Payment Type</strong></label> <br>
                  <label class="radio-inline">
                    <input type="radio" checked="" value="one_time" name="payment_type">
                    One Time
                  </label>
                  <label class="radio-inline">
                    <input type="radio" value="recurring" name="payment_type">
                    Recurring
                  </label>
                </div>
              </div>

              <div class="col-sm-12" id="donation_type_choice">
                <div class="form-group mb-20">
                  <label><strong>Donation Type</strong></label>
                  <div class="radio mt-5">
                    <label class="radio-inline">
                      <input type="radio" value="D" name="t3" checked="">
                      Daily</label>
                    <label class="radio-inline">
                      <input type="radio" value="W" name="t3">
                      Weekly</label>
                    <label class="radio-inline">
                      <input type="radio" value="M" name="t3">
                      Monthly</label>
                    <label class="radio-inline">
                      <input type="radio" value="Y" name="t3">
                      Yearly</label>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group mb-20">
                  <label><strong>I Want to Donate for</strong></label>
                  <select name="item_name" class="form-control">
                    <option value="Educate Children">Educate Children</option>
                    <option value="Child Camps">Child Camps</option>
                    <option value="Clean Water for Life">Clean Water for Life</option>
                    <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group mb-20">
                  <label><strong>Currency</strong></label>
                  <select name="currency_code" class="form-control">
                    <option value="">Select Currency</option>
                    <option value="USD" selected="selected">USD - U.S. Dollars</option>
                    <option value="AUD">AUD - Australian Dollars</option>
                    <option value="BRL">BRL - Brazilian Reais</option>
                    <option value="GBP">GBP - British Pounds</option>
                    <option value="HKD">HKD - Hong Kong Dollars</option>
                    <option value="HUF">HUF - Hungarian Forints</option>
                    <option value="INR">INR - Indian Rupee</option>
                    <option value="ILS">ILS - Israeli New Shekels</option>
                    <option value="JPY">JPY - Japanese Yen</option>
                    <option value="MYR">MYR - Malaysian Ringgit</option>
                    <option value="MXN">MXN - Mexican Pesos</option>
                    <option value="TWD">TWD - New Taiwan Dollars</option>
                    <option value="NZD">NZD - New Zealand Dollars</option>
                    <option value="NOK">NOK - Norwegian Kroner</option>
                    <option value="PHP">PHP - Philippine Pesos</option>
                    <option value="PLN">PLN - Polish Zlotys</option>
                    <option value="RUB">RUB - Russian Rubles</option>
                    <option value="SGD">SGD - Singapore Dollars</option>
                    <option value="SEK">SEK - Swedish Kronor</option>
                    <option value="CHF">CHF - Swiss Francs</option>
                    <option value="THB">THB - Thai Baht</option>
                    <option value="TRY">TRY - Turkish Liras</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group mb-20">
                  <label><strong>How much do you want to donate?</strong></label>
                  <select name="amount" class="form-control">
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                    <option value="500">500</option>
                    <option value="other">Other Amount</option>
                  </select>
                  <div id="custom_other_amount">
                    <label><strong>Custom Amount:</strong></label>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                </div>
              </div>
            </div>
          </form>

          <!-- Script for Donation Form Custom Amount -->
          <script type="text/javascript">
            $(document).ready(function(e) {
              var $donation_form = $("#paypal_donate_form_onetime_recurring");
              //toggle custom amount
              var $custom_other_amount = $donation_form.find("#custom_other_amount");
              $custom_other_amount.hide();
              $donation_form.find("select[name='amount']").change(function() {
                var $this = $(this);
                if ($this.val() == 'other') {
                  $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                } else {
                  $custom_other_amount.children(".input-group").remove();
                  $custom_other_amount.hide();
                }
              });

              //toggle donation_type_choice
              var $donation_type_choice = $donation_form.find("#donation_type_choice");
              $donation_type_choice.hide();
              $("input[name='payment_type']").change(function() {
                if (this.value == 'recurring') {
                  $donation_type_choice.show();
                } else {
                  $donation_type_choice.hide();
                }
              });


              // submit form on click
              $donation_form.on('submit', function(e) {
                $("#paypal_donate_form-onetime").submit();
                var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                var amount = $donation_form.find("select[name='amount'] option:selected").val();
                var t3 = $donation_form.find("input[name='t3']:checked").val();

                if (amount == 'other') {
                  amount = $donation_form.find("#input_other_amount").val();
                }

                // submit proper form now
                if ($("input[name='payment_type']:checked", $donation_form).val() == 'recurring') {
                  var recurring_form = $('#paypal_donate_form-recurring');

                  recurring_form.find("input[name='item_name']").val(item_name);
                  recurring_form.find("input[name='currency_code']").val(currency_code);
                  recurring_form.find("input[name='a3']").val(amount);
                  recurring_form.find("input[name='t3']").val(t3);

                  recurring_form.find("input[type='submit']").trigger('click');

                } else if ($("input[name='payment_type']:checked", $donation_form).val() == 'one_time') {
                  var onetime_form = $('#paypal_donate_form-onetime');

                  onetime_form.find("input[name='item_name']").val(item_name);
                  onetime_form.find("input[name='currency_code']").val(currency_code);
                  onetime_form.find("input[name='amount']").val(amount);

                  onetime_form.find("input[type='submit']").trigger('click');
                }
                return false;
              });

            });
          </script>

          <!-- Paypal Onetime Form -->
          <form id="paypal_donate_form-onetime" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_donations">
            <input type="hidden" name="business" value="accounts@thememascot.com">

            <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
            <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
            <input type="hidden" name="amount" value="20"> <!-- updated dynamically -->

            <input type="hidden" name="no_shipping" value="1">
            <input type="hidden" name="cn" value="Comments...">
            <input type="hidden" name="tax" value="0">
            <input type="hidden" name="lc" value="US">
            <input type="hidden" name="bn" value="PP-DonationsBF">
            <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
            <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
            <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
            <input type="submit" name="submit">
          </form>

          <!-- Paypal Recurring Form -->
          <form id="paypal_donate_form-recurring" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_xclick-subscriptions">
            <input type="hidden" name="business" value="accounts@thememascot.com">

            <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
            <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
            <input type="hidden" name="a3" value="20"> <!-- updated dynamically -->
            <input type="hidden" name="t3" value="D"> <!-- updated dynamically -->


            <input type="hidden" name="p3" value="1">
            <input type="hidden" name="rm" value="2">
            <input type="hidden" name="src" value="1">
            <input type="hidden" name="sra" value="1">
            <input type="hidden" name="no_shipping" value="0">
            <input type="hidden" name="no_note" value="1">
            <input type="hidden" name="lc" value="US">
            <input type="hidden" name="bn" value="PP-DonationsBF">
            <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
            <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
            <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
            <input type="submit" name="submit">
          </form>
          <!-- ===== END: Paypal Both Onetime/Recurring Form ===== -->
        </div>
        <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <h3 class="title text-black-666 line-bottom">Branches <span class="text-theme-colored"> Worldwide</span></h3>
          <div class="row mt-20 multi-row-clearfix">
            <div class="owl-carousel-2col" data-nav="true">
              <div class="item">
                <div class="box-hover-effect effect1 mb-sm-30">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ asset('frontant/images/services/o1.jpg') }}" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0">Office<span class="text-theme-colored"> in Africa</span></h4>
                    <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum</p>
                    <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="box-hover-effect effect1 mb-sm-30">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ asset('frontant/images/services/o2.jpg') }}" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0">Office<span class="text-theme-colored"> in Nepal</span></h4>
                    <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum</p>
                    <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="box-hover-effect effect1 mb-sm-30">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ asset('frontant/images/services/o3.jpg') }}" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0">Office<span class="text-theme-colored"> in India</span></h4>
                    <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum</p>
                    <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="box-hover-effect effect1 mb-sm-30">
                  <div class="thumb"> <a href="#"><img class="img-fullwidth mb-20" src="{{ asset('frontant/images/services/o4.jpg') }}" alt="..."></a> </div>
                  <div class="caption">
                    <h4 class="text-uppercase letter-space-1 mt-0">Office<span class="text-theme-colored"> in Africa</span></h4>
                    <p>Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum</p>
                    <p><a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Read More</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section: Project Start Form -->
<section class="divider parallax layer-overlay overlay-dark-8" data-bg-img="{{ asset('frontant/images/bg/bg4.jpg') }}">
  <div class="container-fluid">
    <div class="row equal-height">
      <div class="col-md-4 col-md-offset-1">
        <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Become a Volunteer</h3>
        <form id="volunteer_apply_form" class="bg-light p-30 pb-15" name="job_apply_form" action="includes/become-volunteer.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_name">Name <small>*</small></label>
                <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_email">Email <small>*</small></label>
                <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_sex">Sex <small>*</small></label>
                <select id="form_sex" name="form_sex" class="form-control required">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="form_branch">Choose Branch <small>*</small></label>
                <select id="form_branch" name="form_branch" class="form-control required">
                  <option value="UK">UK</option>
                  <option value="USA">USA</option>
                  <option value="Australia">Australia</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="form_message">Message <small>*</small></label>
            <textarea id="form_message" name="form_message" class="form-control required" rows="3" placeholder="Your cover letter/message sent to the employer"></textarea>
          </div>
          <div class="form-group">
            <label for="form_attachment">C/V Upload</label>
            <input id="form_attachment" name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
          </div>
          <div class="form-group">
            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
          </div>
        </form>
        <!-- Job Form Validation-->
        <script type="text/javascript">
          $("#volunteer_apply_form").validate({
            submitHandler: function(form) {
              var form_btn = $(form).find('button[type="submit"]');
              var form_result_div = '#form-result';
              $(form_result_div).remove();
              form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
              var form_btn_old_msg = form_btn.html();
              form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
              $(form).ajaxSubmit({
                dataType: 'json',
                success: function(data) {
                  if (data.status == 'true') {
                    $(form).find('.form-control').val('');
                  }
                  form_btn.prop('disabled', false).html(form_btn_old_msg);
                  $(form_result_div).html(data.message).fadeIn('slow');
                  setTimeout(function() {
                    $(form_result_div).fadeOut('slow')
                  }, 6000);
                }
              });
            }
          });
        </script>
      </div>
      <div class="col-md-6 hidden-xs">
        <div class="p-50">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-50 text-white">
              <div class="funfact text-center">
                <div class="funfact-content">
                  <div class="funfact-icon">
                    <i class="pe-7s-smile font-50 text-white"></i>
                  </div>
                  <h2 data-animation-duration="2000" data-value="754" class="animate-number text-theme-colored font-30 mt-10">0</h2>
                  <h4 class="text-uppercase text-white">Happy Donators</h4>
                  <p>Architecto ullam tenetur quia nemo ratione tempora.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-50 text-white">
              <div class="funfact text-center">
                <div class="funfact-content">
                  <div class="funfact-icon">
                    <i class="pe-7s-rocket font-50 text-white"></i>
                  </div>
                  <h2 data-animation-duration="2000" data-value="4469" class="animate-number text-theme-colored font-30 mt-10">0</h2>
                  <h4 class="text-uppercase text-white">Success Mission</h4>
                  <p>Architecto ullam tenetur quia nemo ratione tempora.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-md-50 text-white mt-20">
              <div class="funfact text-center">
                <div class="funfact-content">
                  <div class="funfact-icon">
                    <i class="pe-7s-add-user font-50 text-white"></i>
                  </div>
                  <h2 data-animation-duration="2000" data-value="1106" class="animate-number text-theme-colored font-30 mt-10">0</h2>
                  <h4 class="text-uppercase text-white">Volunteer Reached</h4>
                  <p>Architecto ullam tenetur quia nemo ratione tempora.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-md-50 text-white mt-20">
              <div class="funfact text-center">
                <div class="funfact-content">
                  <div class="funfact-icon">
                    <i class="pe-7s-global font-50 text-white"></i>
                  </div>
                  <h2 data-animation-duration="2000" data-value="698" class="animate-number text-theme-colored font-30 mt-10">0</h2>
                  <h4 class="text-uppercase text-white">Globalization Work</h4>
                  <p>Architecto ullam tenetur quia nemo ratione tempora.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: volunteers 1 -->
<section id="team">
  <div class="container pb-80">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-12">
          <h2 class="line-height-1 mt-0 mb-0 pb-20">Our<span class="text-theme-colored"> Volunteers</span></h2>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
          <div class="team-member">
            <div class="thumb"> <img src="{{ asset('frontant/images/team/1.jpg') }}" alt="" class="img-fullwidth img-responsive"> </div>
            <div class="member-info">
              <div class="member-biography p-20">
                <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                <h5 class="text-white">Student</h5>
              </div>
              <div class="bg-white-transparent-9 text-center">
                <ul class="styled-icons icon-theme-colored icon-hover-theme-colored icon-circled pt-5">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
          <div class="team-member">
            <div class="volunteer-thumb"> <img src="{{ asset('frontant/images/team/2.jpg') }}" alt="" class="img-fullwidth img-responsive"> </div>
            <div class="member-info">
              <div class="member-biography p-20">
                <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                <h5 class="text-white">Student</h5>
              </div>
              <div class="bg-white-transparent-9 text-center">
                <ul class="styled-icons icon-theme-colored icon-hover-theme-colored icon-circled pt-5">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
          <div class="team-member">
            <div class="volunteer-thumb"> <img src="{{ asset('frontant/images/team/3.jpg') }}" alt="" class="img-fullwidth img-responsive"> </div>
            <div class="member-info">
              <div class="member-biography p-20">
                <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                <h5 class="text-white">Businessman</h5>
              </div>
              <div class="bg-white-transparent-9 text-center">
                <ul class="styled-icons icon-theme-colored icon-hover-theme-colored icon-circled pt-5">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 pb-sm-30">
          <div class="team-member">
            <div class="volunteer-thumb"> <img src="{{ asset('frontant/images/team/4.jpg') }}" alt="" class="img-fullwidth img-responsive"> </div>
            <div class="member-info">
              <div class="member-biography p-20">
                <h3 class="text-white mt-0 mb-10">Steve Smith</h3>
                <h5 class="text-white">Businessman</h5>
              </div>
              <div class="bg-white-transparent-9 text-center">
                <ul class="styled-icons icon-theme-colored icon-hover-theme-colored icon-circled pt-5">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Running Project 2 -->
<section class="bg-black-222">
  <div class="container">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mt-0 line-height-1 text-white">Running <span class="text-theme-colored"> Projects</span></h2>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="owl-carousel-4col horse-gallery" data-dots="true">
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="{{ asset('frontant/images/portfolio/p1.jpg') }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="{{ asset('frontant/images/portfolio/p1.jpg') }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="horse-details">
              <h4 class="title mb-5"><a href="#">Earthquake Recovery</a></h4>
              <span class="category">Nepal / South Asia</span>
              <p>
                <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
              </p>
            </div>
          </div>
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="{{ asset('frontant/images/portfolio/p2.jpg') }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="{{ asset('frontant/images/portfolio/p2.jpg') }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="horse-details">
              <h4 class="title mb-5"><a href="#">Relocate Refugees</a></h4>
              <span class="category">Seria / Medilist</span>
              <p>
                <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
              </p>
            </div>
          </div>
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="{{ asset('frontant/images/portfolio/p3.jpg') }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="{{ asset('frontant/images/portfolio/p3.jpg') }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="horse-details">
              <h4 class="title mb-5"><a href="#">Pure Drinking Water</a></h4>
              <span class="category">Somalia/ South Africa</span>
              <p>
                <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
              </p>
            </div>
          </div>
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="{{ asset('frontant/images/portfolio/p4.jpg') }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="{{ asset('frontant/images/portfolio/p4.jpg') }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="horse-details">
              <h4 class="title mb-5"><a href="#">Educating Poor</a></h4>
              <span class="category">India / South Asia</span>
              <p>
                <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
              </p>
            </div>
          </div>
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="{{ asset('frontant/images/portfolio/p5.jpg') }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="{{ asset('frontant/images/portfolio/p5.jpg') }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="horse-details">
              <h4 class="title mb-5"><a href="#">Food For Poor</a></h4>
              <span class="category">India / South Asia</span>
              <p>
                <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
              </p>
            </div>
          </div>
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="{{ asset('frontant/images/portfolio/p6.jpg') }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="{{ asset('frontant/images/portfolio/p6.jpg') }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="horse-details">
              <h4 class="title mb-5"><a href="#">Child Adoption</a></h4>
              <span class="category">India / South Asia</span>
              <p>
                <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
              </p>
            </div>
          </div>
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="{{ asset('frontant/images/portfolio/p7.jpg') }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="{{ asset('frontant/images/portfolio/p7.jpg') }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="horse-details">
              <h4 class="title mb-5"><a href="#">Shalter For Refugees</a></h4>
              <span class="category">Seria / Medilist</span>
              <p>
                <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
              </p>
            </div>
          </div>
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="{{ asset('frontant/images/portfolio/p8.jpg') }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="{{ asset('frontant/images/portfolio/p8.jpg') }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="horse-details">
              <h4 class="title mb-5"><a href="#">Collecting Volunteers</a></h4>
              <span class="category">Sydney Roosters / Sydney</span>
              <p>
                <a href="#" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Goal: $2500</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section: Gallery 1-->
<section id="gallery" class="bg-lighter">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
          <h3 class="mt-0 line-bottom line-height-1">Upcoming <span class="text-theme-colored"> Events</span></h3>
          <div class="event media mb-20 no-bg no-border">
            <div class="event-date media-left text-center flip bg-theme-colored p-20">
              <ul>
                <li class="font-30 text-white font-weight-600 border-bottom pb-10">28</li>
                <li class="font-22 text-white text-uppercase">Feb</li>
              </ul>
            </div>
            <div class="media-body pl-20">
              <div class="event-content pull-left flip">
                <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
              </div>
            </div>
          </div>
          <div class="event media mb-20 no-bg no-border">
            <div class="event-date media-left text-center flip bg-theme-colored p-20">
              <ul>
                <li class="font-30 text-white font-weight-600 border-bottom pb-10">28</li>
                <li class="font-22 text-white text-uppercase">Feb</li>
              </ul>
            </div>
            <div class="media-body pl-20">
              <div class="event-content pull-left flip">
                <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
              </div>
            </div>
          </div>
          <div class="event media mb-20 no-bg no-border">
            <div class="event-date media-left text-center flip bg-theme-colored p-20">
              <ul>
                <li class="font-30 text-white font-weight-600 border-bottom pb-10">28</li>
                <li class="font-22 text-white text-uppercase">Feb</li>
              </ul>
            </div>
            <div class="media-body pl-20">
              <div class="event-content pull-left flip">
                <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
          <h3 class="mt-0 line-bottom line-height-1">Photo <span class="text-theme-colored"> Gallery</span></h3>
          <!-- Portfolio Gallery Grid -->
          <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
            <!-- Portfolio Item Start -->
            <div class="gallery-item photography">
              <div class="thumb">
                <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/s1.jpg') }}" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a data-lightbox="image" href="{{ asset('frontant/images/gallery/s1.jpg') }}"><i class="fa fa-plus"></i></a>
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="{{ asset('frontant/images/gallery/s1.jpg') }}">View more</a>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item branding">
              <div class="thumb">
                <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/s2.jpg') }}" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="#"><i class="fa fa-link"></i></a>
                      <a href="#"><i class="fa fa-heart-o"></i></a>
                    </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="{{ asset('frontant/images/gallery/s2.jpg') }}">View more</a>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item design">
              <div class="thumb">
                <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/s3.jpg') }}" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="{{ asset('frontant/images/gallery/s3.jpg') }}">View more</a>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item photography">
              <div class="thumb">
                <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/s4.jpg') }}" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item branding">
              <div class="thumb">
                <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/s5.jpg') }}" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item design">
              <div class="thumb">
                <div class="flexslider-wrapper">
                  <div class="flexslider">
                    <ul class="slides">
                      <li><a href="{{ asset('frontant/images/gallery/s1.jpg') }}" title="Portfolio Gallery - Photo 1"><img src="{{ asset('frontant/images/gallery/s1.jpg') }}" alt=""></a></li>
                      <li><a href="{{ asset('frontant/images/gallery/s2.jpg') }}" title="Portfolio Gallery - Photo 2"><img src="{{ asset('frontant/images/gallery/s2.jpg') }}" alt=""></a></li>
                      <li><a href="{{ asset('frontant/images/gallery/s3.jpg') }}" title="Portfolio Gallery - Photo 3"><img src="{{ asset('frontant/images/gallery/s3.jpg') }}" alt=""></a></li>
                    </ul>
                  </div>
                </div>
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="#"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item photography">
              <div class="thumb">
                <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/s1.jpg') }}" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a data-lightbox="image" href="images/gallery/s1.jpg"><i class="fa fa-plus"></i></a>
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="{{ asset('frontant/images/gallery/s2.jpg') }}">View more</a>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item design">
              <div class="thumb">
                <div class="flexslider-wrapper" data-direction="vertical">
                  <div class="flexslider">
                    <ul class="slides">
                      <li><a href="images/gallery/s6.jpg" title="Portfolio Gallery - Photo 1"><img src="{{ asset('frontant/images/gallery/s6.jpg') }}" alt=""></a></li>
                      <li><a href="images/gallery/s5.jpg" title="Portfolio Gallery - Photo 2"><img src="{{ asset('frontant/images/gallery/s5.jpg') }}" alt=""></a></li>
                      <li><a href="images/gallery/s4.jpg" title="Portfolio Gallery - Photo 3"><img src="{{ asset('frontant/images/gallery/s4.jpg') }}" alt=""></a></li>
                    </ul>
                  </div>
                </div>
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="#"><i class="fa fa-picture-o"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item photography">
              <div class="thumb">
                <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/s1.jpg') }}" alt="project">
                <div class="overlay-shade"></div>
                <div class="text-holder text-center">
                  <h5 class="title">Gallery Title Here</h5>
                </div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a data-lightbox="image" href="{{ asset('frontant/images/gallery/s1.jpg') }}"><i class="fa fa-plus"></i></a>
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="{{ asset('frontant/images/gallery/s2.jpg') }}">View more</a>
              </div>
            </div>
            <!-- Portfolio Item End -->

          </div>
          <!-- End Portfolio Gallery Grid -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Testimonials and Logo -->
<section class="divider parallax layer-overlay  overlay-white-5" data-stellar-background-ratio="0.2" data-bg-img="{{ asset('frontant/images/bg/bg1.jpg') }}">
  <div class="container pt-0 pb-0">
    <div class="row equal-height">
      <div class="col-md-7">
        <div class="display-table-parent pr-90 pl-90">
          <div class="display-table">
            <div class="display-table-cell">
              <div class="clients text-center pt-30 pb-20 bg-lightest-transparent">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <img src="{{ asset('frontant/images/clients/1.png') }}" alt="" width="100" class="mb-10">
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <img src="{{ asset('frontant/images/clients/2.png') }}" alt="" width="100" class="mb-10">
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <img src="{{ asset('frontant/images/clients/3.png') }}" alt="" width="100" class="mb-10">
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <img src="{{ asset('frontant/images/clients/4.png') }}" alt="" width="100" class="mb-10">
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <img src="{{ asset('frontant/images/clients/5.png') }}" alt="" width="100" class="mb-10">
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-4">
                    <img src="{{ asset('frontant/images/clients/6.png') }}" alt="" width="100" class="mb-10">
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="mt-30">
                <h4 class="text-uppercase mb-5 text-black-222">Subscribe to our newsletter</h4>
                <!-- Mailchimp Subscription Form-->
                <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                  <label class="display-block" for="mce-EMAIL"></label>
                  <div class="input-group">
                    <input type="email" id="mce-EMAIL" data-height="43px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-flat btn-lg btn-colored btn-theme-colored m-0" data-height="43px">Subscribe</button>
                    </span>
                  </div>
                </form>

                <!-- Mailchimp Subscription Form Validation-->
                <script type="text/javascript">
                  $('#mailchimp-subscription-form').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                  });

                  function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form'),
                      $response = '';
                    $mailchimpform.children(".alert").remove();
                    if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    }
                    $mailchimpform.prepend($response);
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 bg-light-transparent">
        <div class="pt-50 pb-50 pl-20 pr-20">
          <h4 class="text-uppercase line-bottom mt-0">Our Donors Say</h4>
          <div class="testimonial-carousel owl-nav-top">
            <div class="item">
              <div class="text-center">
                <div class="thumb"><img class="img-circle" alt="" src="{{ asset('frontant/images/testimonials/1.jpg') }}"></div>
                <div class="content pt-10">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                  <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                  <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                  <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-wrapper text-center">
                <div class="thumb"><img class="img-circle" alt="" src="{{ asset('frontant/images/testimonials/2.jpg') }}"></div>
                <div class="content pt-10">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                  <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                  <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                  <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-wrapper text-center">
                <div class="thumb"><img class="img-circle" alt="" src="{{ asset('frontant/images/testimonials/3.jpg') }}"></div>
                <div class="content pt-10">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                  <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                  <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                  <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Section: Blog -->
<section>
  <div class="container pt-70">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="mt-0 line-height-1">Recent <span class="text-theme-colored"> News</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel-3col owl-nav-top mb-sm-80" data-dots="true">
          <div class="item">
            <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
              <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('frontant/images/blog/1.jpg') }}" alt="" class="img-responsive img-fullwidth"> </div>
                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="entry-content border-1px p-20">
                <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                <ul class="list-inline entry-date pull-right font-12 mt-5">
                  <li><a class="text-theme-colored" href="#">Admin |</a></li>
                  <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                </ul>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          <div class="item">
            <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
              <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('frontant/images/blog/2.jpg') }}" alt="" class="img-responsive img-fullwidth"> </div>
                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="entry-content border-1px p-20">
                <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                <ul class="list-inline entry-date pull-right font-12 mt-5">
                  <li><a class="text-theme-colored" href="#">Admin |</a></li>
                  <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                </ul>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          <div class="item">
            <article class="post clearfix maxwidth600 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
              <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('frontant/images/blog/3.jpg') }}" alt="" class="img-responsive img-fullwidth"> </div>
                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="entry-content border-1px p-20">
                <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                <ul class="list-inline entry-date pull-right font-12 mt-5">
                  <li><a class="text-theme-colored" href="#">Admin |</a></li>
                  <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                </ul>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          <div class="item">
            <article class="post clearfix maxwidth600 mb-sm-30">
              <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('frontant/images/blog/2.jpg') }}" alt="" class="img-responsive img-fullwidth"> </div>
                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="entry-content border-1px p-20">
                <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                <ul class="list-inline entry-date pull-right font-12 mt-5">
                  <li><a class="text-theme-colored" href="#">Admin |</a></li>
                  <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                </ul>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          <div class="item">
            <article class="post clearfix maxwidth600 mb-sm-30">
              <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset('frontant/images/blog/3.jpg') }}" alt="" class="img-responsive img-fullwidth"> </div>
                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="entry-content border-1px p-20">
                <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor a child today</a></h5>
                <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                <ul class="list-inline entry-date pull-right font-12 mt-5">
                  <li><a class="text-theme-colored" href="#">Admin |</a></li>
                  <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                </ul>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection