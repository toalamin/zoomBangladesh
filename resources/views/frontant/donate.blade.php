@extends('frontant_layouts.app')
@section('title')
Adviser Committe List
@endsection
@section('content')

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" style="background: url('/frontant/images/aboutus.jpg') center center / cover fixed;height:400px">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title text-white">About Us</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section> 
      <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">Our <span class="text-theme-colored"> Causes</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ asset('frontant/images/project/1.jpg') }}">
                  <div class="donate-piechart piechart-absolute">
                    <div class="piechart-block">
                      <div class="piechart appeared" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="65" data-linewidth="8">
                        <span class="percent text-white font-weight-700">65</span>
                      <canvas height="110" width="110"></canvas></div>
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
            <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s;">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ asset('frontant/images/project/2.jpg') }}">
                  <div class="donate-piechart piechart-absolute">
                    <div class="piechart-block">
                      <div class="piechart appeared" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="85" data-linewidth="8">
                        <span class="percent text-white font-weight-700">85</span>
                      <canvas height="110" width="110"></canvas></div>
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
            <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s;">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{ asset('frontant/images/project/3.jpg') }}">
                  <div class="donate-piechart piechart-absolute">
                    <div class="piechart-block">
                      <div class="piechart appeared" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                        <span class="percent text-white font-weight-700">75</span>
                      <canvas height="110" width="110"></canvas></div>
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
</div>

@endsection