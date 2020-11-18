@extends('frontant_layouts.app')
@section('title')
Photo Gallery
@endsection

@section('css')
<link href="{{ asset('frontant/css/padding.css') }}" type="text/css" rel="stylesheet" />
<script src="{{ asset('frontant/js/collection.js') }}"></script>

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
                        <h2 class="title text-white">Photo Gallery</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Portfolio Filter -->
                        <div class="portfolio-filter">
                            <a href="#" class="active" data-filter="*">All</a>
                            @foreach($photo as $key => $value)
                            <a href="#photo{{$key}}" class="" data-filter=".photo{{$key}}">{{ $value->title }}</a>
                            @endforeach

                        </div>
                        <!-- End Portfolio Filter -->

                        <!-- Portfolio Gallery Grid -->
                        <div class="gallery-isotope grid-3 gutter-small clearfix" data-lightbox="gallery" style="position: relative; height: 635.949px;">
                            <!-- Portfolio Item Start -->
                            @foreach($photo as $key1 => $value)
                            @foreach($value->photos as $key => $sphoto)
                            <div class="gallery-item photo{{$key1}}" style="position: absolute; left: 0px; top: 0px;">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="frontant/photo/{{$sphoto->image}}" alt="{{$value->title }}">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">{{$sphoto->title }}</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="frontant/photo/{{$sphoto->image}}" data-lightbox-gallery="gallery" title="{{$sphoto->title }}"><i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endforeach

                        </div>
                        <!-- End Portfolio Gallery Grid -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- ======= Contact Section ======= -->

@endsection