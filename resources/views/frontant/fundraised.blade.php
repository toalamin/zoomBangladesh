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
                        <h2 class="title text-white">About Us</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: About -->
    <section>
        <div class="container">
            <div class="clearfix"></div>
            <h2 class="mt-0 line-height-1 text-center">FUNDRAISE OF<span class="text-theme-colored"> Zoom Bangladesh Foundation</span></h2>
            <div class="separator separator-rouned">
                <i class="fa fa-cog fa-spin"></i>
            </div>


            <p class="text-justify">


                At Zoom Bangladesh Foundation we are working hard to provide high quality education to the underprivileged children of Bangladesh, and we continually strive to reach more districts and improve the educational standards provided to our students. As a result, our funding is limited, as we receive no government support and rely heavily on generous individuals and corporations to help us in providing free-of-cost education to impoverished children in Bangladesh.

                You are able to help in breaking this poverty cycle, simply by dedicating a little of your precious time and effort to help raise funds – you personally can make a world of difference to hundreds of the nation’s poorest children. Help us to help the 3.3 million uneducated children in Bangladesh to fulfil their dreams, and make life the opportunity it should be.

            </p>

            <div class="clearfix"></div>
            <h2 class="mt-0 line-height-1 text-center">How to fundraise with<span class="text-theme-colored"> Zoom Bangladesh Foundation</span></h2>
            <div class="separator separator-rouned">
                <i class="fa fa-cog fa-spin"></i>
            </div>


            <p class="text-justify">


                By organizing an event in aid of Zoom Bangladesh – whether it be big or small – you will be giving children in Bangladesh the opportunity to break out of the poverty cycle and create an educated future generation.

                When planning your event or thinking of ideas, there are no limits! Most importantly the event should be something you enjoy and can easily organise. To help you with organising and planning your event, we have put together a Fundraising Guide with more information about Zoom Bangladesh, useful hints and some event ideas – please click here for more info.

            </p>
            <div class="clearfix"></div>
            <h2 class="mt-0 line-height-1 text-center">Previous fundraisers of<span class="text-theme-colored"> Zoom Bangladesh Foundation</span></h2>
            <div class="separator separator-rouned">
                <i class="fa fa-cog fa-spin"></i>
            </div>
            <div class="row">

                @foreach($fundraise as $key => $value)

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <article class="post clearfix mb-sm-30" style="max-height: 400px!important;">
                        <div class="entry-content p-20 pr-10" >
                            <div class="entry-meta media mt-0 no-bg no-border">

                                <div class="media-body pl-10">
                                    <div class="event-content pull-left flip bg-red text-green " style="height: 50px!important;">
                                        <h4 class="entry-title text-white text-capitalize m-0"><a href="#"> <?php echo $description = substr($value->title, 0, 200); ?></a></h4>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="entry-header">
                            <div class="post-thumb thumb">
                                <img src="frontant/fundraise/{{$value->image}}" alt="" class="img-responsive img-fullwidth">
                            </div>
                        </div>

                    </article>
                </div>
                @endforeach


            </div>

        </div>
    </section>
    <!-- divider: Became a Volunteers 2 -->

    @endsection