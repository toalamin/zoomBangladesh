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
                            <a href="#branding" class="" data-filter=".branding">Branding</a>
                            <a href="#design" class="" data-filter=".design">Design</a>
                            <a href="#photography" class="" data-filter=".photography">Photography</a>
                        </div>
                        <!-- End Portfolio Filter -->

                        <!-- Portfolio Gallery Grid -->
                        <div class="gallery-isotope grid-3 gutter-small clearfix" data-lightbox="gallery" style="position: relative; height: 635.949px;">
                            <!-- Portfolio Item Start -->
                            <div class="gallery-item design" style="position: absolute; left: 0px; top: 0px;">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/3.jpg') }}" alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('frontant/images/gallery/3.jpg') }}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>










                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item design" style="position: absolute; left: 759px; top: 0px;">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/3.jpg') }}" alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('frontant/images/gallery/3.jpg') }}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item branding" style="position: absolute; left: 0px; top: 211px;">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/4.jpg') }}" alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('frontant/images/gallery/4.jpg') }}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item design photography" style="position: absolute; left: 379px; top: 211px;">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/5.jpg') }}" alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('frontant/images/gallery/5.jpg') }}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item photography" style="position: absolute; left: 759px; top: 211px;">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/6.jpg') }}" alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('frontant/images/gallery/6.jpg') }}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item branding" style="position: absolute; left: 0px; top: 423px;">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/7.jpg') }}" alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('frontant/images/gallery/7.jpg') }}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item photography" style="position: absolute; left: 379px; top: 423px;">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/8.jpg') }}" alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('frontant/images/gallery/8.jpg') }}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item End -->

                            <!-- Portfolio Item Start -->
                            <div class="gallery-item branding" style="position: absolute; left: 759px; top: 423px;">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ asset('frontant/images/gallery/4.jpg') }}" alt="project">
                                    <div class="overlay-shade"></div>
                                    <div class="text-holder">
                                        <div class="title text-center">Sample Title</div>
                                    </div>
                                    <div class="icons-holder">
                                        <div class="icons-holder-inner">
                                            <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                <a href="{{ asset('frontant/images/gallery/4.jpg') }}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
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

</div>
<!-- ======= Contact Section ======= -->

@endsection