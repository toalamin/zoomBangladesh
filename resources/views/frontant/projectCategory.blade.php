@extends('frontant_layouts.app')
@section('title')
Contact Us
@endsection
@section('css')


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
                        <h2 class="title text-white">Our Running Project</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-lighter">
        <div class="container pb-80">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-center">Our Running <span class="text-theme-colored"> Project</span></h2>
                        <div class="separator separator-rouned">
                            <i class="fa fa-cog fa-spin"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mtli-row-clearfix">
                <div class="owl-carousel-3col" data-nav="true">
                    @foreach($project as $key => $value)
                    <div class="item">
                        <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                            <div class="thumb">
                                <img class="img-fullwidth" height="300px" alt="" src="frontant/projectCategory/{{ $value->image }}">
                            </div>
                            <div class="progress-item mt-0">
                                <div class="progress mb-0">
                                    <div class="progress-bar" data-percent="{{ rand(30,80) }}"></div>
                                </div>
                            </div>
                            <div class="causes-details clearfix border-bottom p-15 pt-10">
                                <h5><a href="#">{{ $value->title }}</a></h5>
                                <?php
                                $result = str_replace("<p>", "", $value->short_description);
                                $result = str_replace("<p>", "", $result);

                                ?>
                              
                                <ul class="list-inline clearfix mt-20">
                                    <li class="pull-left pr-0">Raised: {{ $value->raise }}</li>
                                    <li class="text-theme-colored pull-right pr-0">Goal: {{ $value->goal }}</li>
                                </ul>
                                <div class="mt-10">
                                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="{{ route('donate.page') }}">Make Donate Now</a>
                                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    @foreach($project as $key => $value)
                    <div class="col-xs-6 col-sm-6 col-md-6 mb-40" style="height: 700px!important;">
                        <a class="image-popup-vertical-fit" title="{{$value->title }}" href="frontant/projectCategory/{{ $value->image }}"><img src="frontant/projectCategory/{{ $value->image }}" alt=""></a>
                        <h3>{{$value->title }}</h3>
                        <ul class="list theme-colored">
                            <li><strong>Location</strong> : Nepal / South Asia</li>
                            <li><strong>Raise</strong> : {{ $value->raise }}</li>
                            <li><strong>Success</strong> : {{ $value->success }}</li>
                            <li><strong>Goal</strong> :{{ $value->goal }}</li>
                            <li><strong class="text-theme-colored"> Global : {{ $value->global }}</strong></li>
                        </ul>

                        <?php
                        $result = str_replace("<p>", "", $value->description);
                        $result = str_replace("<p>", "", $result);

                        ?>
                        <p><?php echo substr($result, 0, 1000);  ?></p>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    



</div>
@endsection