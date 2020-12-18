<?php 

use App\models\SystemConfig;
$config = SystemConfig::first();

?>

<div class="header-top bg-theme-colored sm-text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="widget no-border m-0">
                    <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                        <li><a target="_blank" href="{{ $config->fb_link}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="{{ $config->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="{{ $config->youtube_link}}"><i class="fa fa-youtube"></i></a></li>
                        <li><a target="_blank" href="{{ $config->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="widget no-border m-0">
                    <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">{{ $config->phone}}</a> </li>
                        <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Fri-Thu 8:00am to 10:00pm </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">{{ $config->email }}</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="widget no-border m-0">
                    <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                        <li class="mt-sm-10 mb-sm-10">
                            <!-- Modal: Appointment Starts -->
                            <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 " style="color:red!important;" href="{{route('donate.page')}}">Donate Us</a>
                        </li>
                        <li class="mt-sm-10 mb-sm-10">
                            <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 " style="color:red!important;" href="{{ route('volunteer.page') }}">Join Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>