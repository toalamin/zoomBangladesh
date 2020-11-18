@extends('frontant_layouts.app')
@section('title')
Welcome to Zoom Bangladesh
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
          <?php
          $image = array('slider.jpg', 'p7.jpg', 'contact.jpg');
          ?>
          @foreach($slider as $value)
          <!-- SLIDE 1 -->
          <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
            <!-- MAIN IMAGE -->
            <img src="frontant/slider/{{$value->image}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
            <!-- LAYERS -->
          </li>
          @endforeach
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
  <div class="container pt-4 pb-0">
    <div class="section-content">
      <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
          <div class="sm-height-auto bg-theme-colored-lighter2">
            <div class="text-center pt-30 pb-sm-30">
              <div class="icon-box text-center">
                <a class="icon bg-white icon-circled icon-xl" style="background-color: red!important" href="#">
                  <i style="color:white!important;" class="flaticon-charity-make-an-online-donation text-white"></i>
                </a>
                <div class="p-10">
                  <h4 class="text-uppercase text-white mt-0">Donate money</h4>
                  <p class="text-white text-justify"><br><?php echo str_replace('<p>', '', $help[0]->description); ?></p>
                  <a href="{{ route('donate.page') }}" class="btn btn-border btn-circled btn-transparent btn-sm">Donate Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
          <div class="sm-height-auto bg-theme-colored-lighter4">
            <div class="text-center pt-30 pb-sm-30">
              <div class="icon-box text-center">
                <a class="icon bg-white icon-circled icon-xl" style="background-color: red!important" href="#">

                  <i style="color:white!important;" class="flaticon-charity-shaking-hands-inside-a-heart text-white"></i>
                </a>
                <div class="p-10">
                  <h4 class="text-uppercase text-white mt-0">Become a Volunteer</h4>
                  <p class="text-white text-justify"><br><?php echo str_replace('<p>', '', $help[1]->description); ?></p>
                  <a href="{{ route('volunteer.page') }}" class="btn btn-border btn-circled btn-transparent btn-sm">Join us Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay5">
          <div class="sm-height-auto bg-theme-colored-lighter3">
            <div class="text-center pt-30 pb-sm-30">
              <div class="icon-box text-center">
                <a class="icon bg-white icon-circled icon-xl" style="background-color: red!important" href="#"> <i style="color:white!important;" class="flaticon-charity-dove-of-peace text-theme-colored"></i> </a>
                <div class="p-10">
                  <h4 class="text-uppercase text-white mt-0">Adopt a Child</h4>
                  <p class="text-white text-justify"><br><?php echo str_replace('<p>', '', $help[2]->description); ?></p>
                  <a href="{{ route('contact') }}" class="btn btn-border btn-circled btn-transparent btn-sm">Contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay7">
          <div class="sm-height-auto bg-theme-colored">
            <div class="text-center pt-30 pb-sm-30">
              <div class="icon-box text-center">
                <a class="icon bg-white icon-circled icon-xl" style="background-color: red!important" href="#">
                  <i style="color:white!important;" class="flaticon-charity-hand-holding-a-gift text-white"></i>
                </a>
                <div class="p-10">
                  <h4 class="text-uppercase text-white mt-0">Give Scholarship</h4>
                  <p class="text-white text-justify"><br><?php echo str_replace('<p>', '', $help[3]->description); ?>.</p>
                  <a href="https://www.facebook.com/zoombanglayouth" target="_blank" class="btn btn-border btn-circled btn-transparent btn-sm">Join Facebook?</a>
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
<div class="section-title text-center"><br><br>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2 class="mt-0 line-height-1 text-center">Welcome To<span class="text-theme-colored"> Zoom Bangladesh </span></h2>
      <div class="separator separator-rouned">
        <i class="fa fa-cog fa-spin"></i>
      </div>
    </div>
  </div>
</div>

<!-- Section: About-->
<section id="about">
  <div class="container pt-0 pb-60 mt-0">
    <div class="section-content">
      <div class="row">
        <div class="col-md-7">
          <h2 class="text-uppercase mt-0">Mission Of<span class="text-theme-colored"> Zoom Bangladesh</span></h2>
          <h4 class="text-gray-dimgray text-theme-colored font-weight-400"><em>{{ $misson->title }}</em></h4>
          <p class="text-justify">
            <?php //echo $mission->description;
            ?>

          </p>
          <p class="text-justify">
            <?php echo str_replace('<p>', '', $misson->description); ?>
          </p>
        </div>
        <div class="col-md-5">
          <div class="row mb-10 pt-10">
            <div class="col-md-12">
              <img alt="" src="{{ asset('frontant/images/img1.jpg') }}" class="img-fullwidth">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-5 pr-sm-15 mb-sm-10">
              <img alt="" src="{{ asset('frontant/images/img2.jpg') }}" class="img-fullwidth">
            </div>
            <div class="col-md-6 pl-5 pl-sm-15">
              <img alt="" src="{{ asset('frontant/images/img3.jpg') }}" class="img-fullwidth">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-title text-center">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2 class="mt-0 line-height-1 text-center">How Can Help<span class="text-theme-colored"> Zoom Bangladesh Foundation ? </span></h2>
      <div class="separator separator-rouned">
        <i class="fa fa-cog fa-spin"></i>
      </div>
    </div>
  </div>
</div>
<section id="about">
  <div class="container-fluid pt-0 pb-0">
    <div class="row equal-height">
      <div class="col-sm-6 col-md-6 bg-lighter mt-sm-0 pt-sm-0">


        <div class="row" style="background-color: green;">
          <br>
          <div class="col-xs-12 col-sm-6 col-md-6" style="height: 200px!important;">
            <div class="icon-box border-1px p-15 mb-30" style="background-color: red;color:white;">
              <a class="icon pull-left sm-pull-none flip" href="{{ route('donate.page') }}">
                <i class="flaticon-charity-make-an-online-donation text-white"></i>
              </a>
              <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mt-sm-0 mb-5 text-white text-uppercase">Give Donation</h5>
                <p class="text-justify"><?php echo str_replace('<p>', '', $help[0]->description); ?></p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6" style="height: 200px!important;">
            <div class="icon-box border-1px p-15 mb-30" style="background-color: red;color:white;">
              <a class="icon pull-left sm-pull-none flip" href="{{ route('volunteer.page') }}">
                <i class="flaticon-charity-shaking-hands-inside-a-heart text-white"></i>
              </a>
              <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mt-sm-0  mb-5 text-uppercase text-white">Become Volenteer</h5>
                <p class="text-justify"><?php echo str_replace('<p>', '', $help[1]->description); ?></p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="icon-box border-1px p-15 mb-30" style="background-color: red;color:white;">
              <a class="icon pull-left sm-pull-none flip" href="{{ route('donate.page') }}">
                <i class="flaticon-charity-hand-holding-a-gift text-white"></i>
              </a>
              <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mt-sm-0 mb-5 text-uppercase text-white">Give Scholarship</h5>
                <p class="text-justify"><?php echo str_replace('<p>', '', $help[2]->description); ?></p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="icon-box border-1px p-15 mb-30" style="background-color: red;color:white;">
              <a class="icon pull-left sm-pull-none flip" href="{{ route('sponsorchild.page') }}">
                <i class="flaticon-charity-dove-of-peace-1 text-white"></i>
              </a>
              <div class="ml-70 ml-sm-0">
                <h5 class="icon-box-title mt-15 mt-sm-0 mb-5 text-uppercase text-white">Adopt a Child</h5>
                <p class="text-justify"><?php echo str_replace('<p>', '', $help[3]->description); ?></p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-sm-6 col-md-6 pt-0 pb-0 bg-img-cover hidden-xs">
        <div class="col-sm-12 col-md-12 wow fadeInUp animation-delay4">

          <div class="owl-carousel-1col" data-nav="true">
            @foreach($help as $key => $value)
            <div class="item">
              <div class="box-hover-effect effect1 mb-sm-30">

                <iframe width="560" height="420" src="{{ $value->link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<div class="section-title text-center">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2 class="mt-0 line-height-1 text-center">Running <span class="text-theme-colored"> Project </span></h2>
      <div class="separator separator-rouned">
        <i class="fa fa-cog fa-spin"></i>
      </div>
    </div>
  </div>
</div>

<!-- Section: Running Project 2 -->
<section class="bg-black-222">
  <div class="container">

    <div class="section-content">
      <div class="row">
        <div class="owl-carousel-4col horse-gallery" data-dots="true">


          @foreach($projectCategory as $key => $value)
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="frontant/projectCategory/{{ $value->image }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="frontant/projectCategory/{{ $value->image }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="horse-details" style="height: 300px!important;">
              <h4 class="title mb-5"><a href="#">{{ $value->title }}</a></h4>

              <?php
              $result = str_replace("<p>", "", $value->description);
              $result = str_replace("<p>", "", $result);
              ?>
              <span class="category"><?php echo substr($result, 0, 300);  ?></span>
              <hr>
              <div style="margin-bottom: 0px!important;">
                <a href="{{ route('donate.page') }}" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Goal: {{ $value->goal }}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<div class="section-title text-center">
  <div class="row">
    <div class="col-md-8 col-md-offset-2"><br>
      <h2 class="mt-0 line-height-1 text-center">Complete <span class="text-theme-colored"> Project </span></h2>
      <div class="separator separator-rouned">
        <i class="fa fa-cog fa-spin"></i>
      </div>
    </div>
  </div>
</div>

<!-- Section: Running Project 2 -->
<section class="bg-black-222">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="owl-carousel-4col horse-gallery" data-dots="true">
          @foreach($complteteProject as $key => $value)
          <div class="gallery-item">
            <div class="thumb">
              <img class="img-fullwidth" src="frontant/projectCategory/{{ $value->image }}" alt="project">
              <div class="overlay-shade"></div>
              <div class="icons-holder">
                <div class="icons-holder-inner">
                  <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                    <a data-lightbox="image" href="frontant/projectCategory/{{ $value->image }}"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="horse-details" style="height: 300px!important;">
              <h4 class="title mb-5"><a href="#">{{ $value->title }}</a></h4>
              <?php
              $result = str_replace("<p>", "", $value->description);
              $result = str_replace("<p>", "", $result);
              ?>
              <span class="category"><?php echo substr($result, 0, 300);  ?></span>
              <hr>
              <div style="margin-bottom: 0px!important;">
                <a href="{{ route('donate.page') }}" class="btn btn-theme-colored btn-flat mt-5 btn-sm" role="button">Donate</a>
                <span class="pull-right ml-10 mt-12 font-14">Success: {{ $value->success }}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about2">
  <div class="container">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2"><br>
          <h2 class="mt-0 line-height-1 text-center">Month of <span class="text-theme-colored"> Employee </span></h2>
          <div class="separator separator-rouned">
            <i class="fa fa-cog fa-spin"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="owl-carousel-3col">
            <?php
            $sl = 0; ?>
            @foreach($monthlyEmployee as $key => $value)
            <?php
            $sl += 1;
            ?>
            <div class="item">
              <div class="thumb"><img alt="" src="frontant/team/{{ $value->team->image}}" class="img-fullwidth"></div>
              <div class="info">
                <h4 class="mb-0">{{ $value->team->full_name }} <small>- {{ $value->team->designation }}</small> </h4>
                <h4 style="color:green" class="mb-0">{{ $value->team->branch }}</h4>
                <p><?php echo  $value->description; ?></p>
                <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-10 mb-0">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
            <?php
            if ($sl == 3) :
              $sl = 0;

            endif;
            ?>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about2">
  <div class="container">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2"><br>
          <h2 class="mt-0 line-height-1 text-center">Year of <span class="text-theme-colored"> Employee </span></h2>
          <div class="separator separator-rouned">
            <i class="fa fa-cog fa-spin"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="owl-carousel-3col">
            <?php
            $sl = 0; ?>
            @foreach($yearlyEmployee as $key => $value)
            <?php
            $sl += 1;
            ?>
            <div class="item">
              <div class="thumb"><img alt="" src="frontant/team/{{ $value->team->image}}" class="img-fullwidth"></div>
              <div class="info">
                <h4 class="mb-0">{{ $value->team->full_name }} <small>- {{ $value->team->designation }}</small> </h4>
                <h4 style="color:green" class="mb-0">{{ $value->team->branch }}</h4>
                <p><?php echo  $value->description; ?></p>
                <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-10 mb-0">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
            <?php
            if ($sl == 3) :
              $sl = 0;

            endif;
            ?>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Section: Testimonials and Logo -->
<section class="divider parallax layer-overlay  overlay-white-5" data-stellar-background-ratio="0.2" data-bg-img="{{ asset('frontant/images/bg/bg1.jpg') }}">
  <div class="container pt-0 pb-0">
    <div class="row equal-height">

      <div class="col-md-5 bg-light-transparent">
        <div class="pt-50 pb-50 pl-20 pr-20">
          <h4 class="text-uppercase line-bottom mt-0">Our Sponsors</h4>
          <div class="owl-carousel-3col">
            @foreach($sponsor as $key => $value)
            <div class="item">
              <div class="text-center">
                <div class="thumb"><img class="img-circle" alt="" src="frontant/sponsor/{{ $value->logo}}"></div>
                <div class="content pt-10">
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p> -->
                  <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                  <h5 class="author text-theme-colored mb-0">{{ $value->name }}</h5>
                  <!-- <h6 class="title text-gray mt-0 mb-15">Designer</h6> -->
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>

      <div class="col-md-2 bg-light-transparent"></div>



      <div class="col-md-5 bg-light-transparent">
        <div class="">
          <h4 class="text-uppercase line-bottom mt-0">Our Sponsors</h4>
          <div class="owl-carousel-1col">
            @foreach($people as $key => $value)
            <div class="item">
              <div class="text-center">
                <div class="thumb"><img class="img-circle" alt="" src="frontant/people/{{$value->image}}"></div>
                <div class="content">
                  <p><?php echo $value->description; ?></p>
                  <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                  <h5 class="author text-theme-colored mb-0"><?php echo $value->name; ?></h5>
                  <h6 class="title text-gray mt-0 mb-15"><?php echo $value->designation; ?></h6>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>


    </div>
  </div>
</section>
@endsection