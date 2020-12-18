@extends('frontant_layouts.app')
@section('title')
Contact Us
@endsection
@section('css')


@endsection

@section('content')
<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-white-8" style="background: url('/frontant/images/aboutus.jpg') center center / cover fixed;height:400px">
    <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title text-white">Our Teams</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="section-content">
            <div class="row mb-30">
                @foreach($categoryWiseTeam as $key => $value)
                <div class="clearfix"></div>
                <h2 class="mt-0 line-height-1 text-center">Our <span class="text-theme-colored"> {{$value->title}}</span></h2>
                <div class="separator separator-rouned">
                    <i class="fa fa-cog fa-spin"></i>
                </div>

                @foreach($value->teams as $key => $team)
                <div class="col-md-4">
                    <div class="team-member maxwidth400">

                        <?php if (!empty($team->image)) : ?>
                            <div class="thumb"><img alt="" src="frontant/team/{{$team->image}}" class="img-fullwidth"></div>
                        <?php else : ?>
                            <div class="thumb"><img alt="" src="default.jpg" class="img-fullwidth"></div>

                        <?php endif; ?>


                        <div class="info">
                            <h4 class="mb-0">{{ $team->full_name }} <small>- {{ $team->designation }}</small> <small>- {{ $team->branch }}</small></h4>
                            <p>{{ $team->short_description }}</p>
                            <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-10 mb-0">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach
                @endforeach


            </div>

        </div>
    </div>
</section>










@endsection