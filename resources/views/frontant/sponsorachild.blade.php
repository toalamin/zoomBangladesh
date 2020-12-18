@extends('frontant_layouts.app')
@section('title')
Sponsor A Child
@endsection
@section('css')
@endsection

@section('content')

<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-parallax-ratio="0.7" style="background: url('/frontant/images/aboutus.jpg') center center / cover fixed;height:400px">
        <div class="container pt-100 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title text-white">Child Sponsoor</h2>
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
                        <h2 class="mt-0 line-height-1 text-center">Recomended Child <span class="text-theme-colored"> For You</span></h2>
                        <div class="separator separator-rouned">
                            <i class="fa fa-cog fa-spin"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p style="color: #000000;font-size: 18px;display: block">
                            By sponsoring a child you can help a child to attend school to get his education without any risk of dropout.<br>
                            In our child sponsorship program you can provide support for a child and his community.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="carousel slide multi-item-carousel childCarousel" id="childCarousel">
                        <div class="carousel-inner">
                            @foreach($slideItem as $key => $value)
                            <div class="item  @if($key == 0) active @endif">
                                @foreach($value as $vl => $item)
                                <div class="col-md-4 col-sm-4">
                                    <div class="child-info-area">
                                        <div class="row">
                                            <div class="col-md-12 child_photo_area">
                                                <a href="#"><img src="frontant/child/{{$item['image']}}" class="img-responsive img-circle img-border-shadow wp-post-image" alt="" width="240" height="300"></a>
                                            </div>
                                            <div class="col-md-12" style="text-align: center">
                                                <a rel="nofollow" href="{{ route('donate.page')}}" data-quantity="1" data-product_id="1133" data-product_sku="" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10 btn-block">Sponsor Me</a>
                                                <h5 style="text-transform: capitalize; margin-bottom: 8px; font-size: 18px">{{ $item['name'] }}</h5>
                                                
                                                <table class="table table-bordered">
                                                    <tr>
                                                        <td>Gender: </td>
                                                        <td>{{ $item['gender'] }} ,{{ $item['years'] }} Years</td>
                                                    </tr> 
                                                   
                                                    <tr>
                                                        <td>Dream: </td>
                                                        <td>{{ $item['dream'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Section: </td>
                                                        <td>{{ $item['section'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hobby: </td>
                                                        <td>{{ $item['hobby'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Father: </td>
                                                        <td>{{ $item['father'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mother: </td>
                                                        <td>{{ $item['mother'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>District: </td>
                                                        <td>{{ $item['district'] }}</td>
                                                    </tr>
                                                </table>
                                                
                                                
                                                <h5><span style="border-bottom: 2px solid lightgrey;">BANGLADESH</span></h5>
                                            </div>
                                            <!-- <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1 video-link medium-paragraph" style="text-align: center">
                                                
                                                    <a class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{$vl}}" target="ifr" class="icon-play" data-toggle="modal" data-target=".video1">
                                                                                                            <a href="#" data-video-url="" class="launch-modal" data-modal-id="modal-video"> -->
                                            <!-- <span style="display: block;line-height: normal" class="video-link-icon"><i class="fa fa-youtube-play"></i></span>
                                                        <span style="display: block;line-height: normal" class="video-link-text">Childs video</span>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 video-link medium-paragraph" style="text-align: center">
                                                    <a href="http://www.mastul.net/child/doyekul-shang-bowm/" class="launch-modal" data-modal-id="modal-video">
                                                        <span style="display: block;line-height: normal" class="video-link-icon"><i class="fa fa-users"></i></span>
                                                        <span style="display: block;line-height: normal" class="video-link-text">Make Donate Me</span>
                                                    </a>
                                                </div> -->
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                        <a class="left carousel-control" href="#childCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></i></a>
                        <a class="right carousel-control" href="#childCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></i></a>
                    </div>
                    <br>
                    <div class="modal video1" id="exampleModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="text-align: center;">

            <?php echo isset($featured->description) ? $featured->description : '';?>
            </div>
        </div>
    </section>


</div>
<style>
    .carousel-inner .active.left {
        left: -33%;
    }

    .carousel-inner .next {
        left: 33%;
    }

    .carousel-inner .prev {
        left: -33%;
    }

    .carousel-control.left,
    .carousel-control.right {
        background-image: none;
    }

    .item:not(.prev) {
        visibility: visible;
    }

    .item.right:not(.prev) {
        visibility: hidden;
    }

    .rightest {
        visibility: visible;
    }

    .sticky_menu_area {
        position: absolute;
        top: 5px;
        left: 5%;
        z-index: 99;
        /*background-color: black;*/
        /*opacity: 0.5*/
    }




    #childCarousel p {
        margin: 0 0 5px;
        line-height: 20px;
    }

    #childCarousel .carousel-control,
    #single_child_carousal .carousel-control {
        width: 7%;
        top: 32%;
        bottom: auto;
        color: #2375b8;
        text-shadow: none;
        opacity: 1;
    }

    #childCarousel .carousel-control .glyphicon-chevron-left,
    #childCarousel .carousel-control .glyphicon-chevron-right,
    #single_child_carousal .carousel-control .glyphicon-chevron-left,
    #single_child_carousal .carousel-control .glyphicon-chevron-right {
        margin-top: -15px;
    }

    #childCarousel .carousel-control .glyphicon-chevron-left,
    #single_child_carousal .carousel-control .glyphicon-chevron-left {
        margin-left: -15px;
    }

    #childCarousel .carousel-control .glyphicon-chevron-right,
    #single_child_carousal .carousel-control .glyphicon-chevron-right {
        margin-right: -15px;
    }

    .carousel-control.right {
        right: -60px;
    }

    .carousel-control.left {
        left: -60px;
    }

    .story-section {
        margin-top: 20px;
    }

    .story-section .carousel-caption p,
    .story-section .carousel-caption h3 {
        color: #ffffff;
    }

    .story-section .carousel-caption h3 {
        color: #ffffff;
        margin-bottom: 10px;
    }

    .story-section .carousel-caption {
        left: 10%;
        right: 10%;
        top: 20px;
    }

    .child-info-area {
        border: 1px solid #dddddd;
        padding: 0 14px 20px;
    }

    .child_photo_area {
        background: url("frontant/images/ChildProfile0011.png") no-repeat top center;
        background-size: 100% 100%;
    }

    .img-border-shadow {
        background-color: #fff;
        border: 1px solid #000;
        padding: 4px 5px;
        margin-right: auto;
        margin-left: auto;
        width: 85%;
    }

    .sticky-story-section {
        margin-top: 20px;
        position: relative;
    }

    .sticky-story-section img {
        width: 100%;
    }

    .sticky-story-content-area {
        position: absolute;
        top: 30%;
        left: 10%;
        width: auto;
    }

    .sticky-story-content-area h3 {
        color: #ffffff;
        font-size: 40px;
        line-height: 50px;
        text-transform: capitalize;
        margin-bottom: 10px;
        text-align: center;

    }

    .sticky-story-content-area p {
        color: #ffffff;
        border-top: 1px solid #ffffff;
        text-align: center;
    }

    .sponsor-story-section {
        margin-top: 20px;
    }

    .sponsor-story-section img {
        width: 100%;
    }

    .sponsor-story-content {
        padding-top: 50px;

    }

    .sponsor-story-content h3 {
        background-color: #2375b8;
        color: #ffffff;
        margin-bottom: 10px;
        padding: 10px 0 15px 50px;
        text-transform: capitalize;
    }

    .sponsor-story-content h5 {
        color: #ffffff
    }

    .sponsor-story-content p {
        color: #ffffff
    }

    .sponsor-section {
        padding-top: 20px;
        margin-top: 15px;
        background: url("../images/blue.png") no-repeat;
        background-size: 100% 100%;
    }

    .slogan-section img {
        width: 100%;
        height: auto;
    }

    .slogan-content-area p {
        color: #ffffff;
    }

    .sort-destination-loader {
        padding: 20px;
        background-color: #fff;
        margin-bottom: 20px;
    }

    .sort-destination-loader .thumb-info {
        border-radius: 25px;
    }

    .sort-destination-loader .thumb-info-wrapper {
        border-radius: 25px;
    }

    #footer .sidebar .textwidget p {
        color: #000;
    }

    #footer .social-widget a {
        color: #ffffff;
        padding: 5px 0;
    }

    .bs-slider {
        overflow: hidden;
        max-height: 500px;
        position: relative;
        background: #000000;
    }

    .bs-slider:hover {
        cursor: -moz-grab;
        cursor: -webkit-grab;
    }

    .bs-slider:active {
        cursor: -moz-grabbing;
        cursor: -webkit-grabbing;
    }

    .bs-slider .bs-slider-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.40);
    }

    .bs-slider>.carousel-inner>.item>img,
    .bs-slider>.carousel-inner>.item>a>img {
        margin: auto;
        width: 100% !important;
        max-height: 500px;
    }
</style>
@endsection