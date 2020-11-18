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
            <div class="row">
                <div class="col-md-12">
                    <img class="pull-left mr-15 thumbnail" width="50%" src="{{ asset('frontant/images/aboutusfirstleft.jpg') }}" alt="">
                    <h2 class="mt-0 line-height-1 text-center">Our <span class="text-theme-colored"> Mission</span></h2>

                    <p style="text-align:justify;font-size:15px">The main target of Evergreen Zoom Bangladesh Foundation is to make Bangladesh free from street-children. The goal of Evergreen Zoom Bangladesh Foundation is to improve the socio-economic status of the under privileged anddisadvantaged people by education. The basic rights of education, food, clothes and treatment is to establish among the under privileged people. The pathway is to develop children’s primary education, especially lettered them. Addicted children are to come back in healthy life through counselling. To develop the education of underprivileged children of slums so that these children can complete the junior secondary in other educational institutions. Besides, deprivation of rights is also expected for improving the socio-economic status of underprivileged people. Entrepreneurmale/female/children have to be encouraged to improve the socio-economic status by formal education, training and observed sectors..</p>
                    <div class="clearfix"></div>
                    <h2 class="mt-0 line-height-1 text-center">Background of Evergreen <span class="text-theme-colored"> Zoom Bangladesh Foundation</span></h2>
                    <div class="separator separator-rouned">
                        <i class="fa fa-cog fa-spin"></i>
                    </div>
                    <p class="text-justify">
                        Zoom Bangladesh is an independent organization. The word “Zoom” used from the perspective of Camera Lens. The way a lens bring any far scenario in front through zooming this foundation also aims to bring the underprivileged children on light through zooming from all over Bangladesh. This underprivileged children are consider as burden of society. So, to ensure this street children basic rights Zoom Bangladesh start their Journey in 2016. At the first year of journey Zoom Bangladesh distributed Educational materials, New dress on various occasion and nutritious food in different area of Dhaka city. Then, the Founder, of Zoom Bangladesh Mr. ST Shahin Prodhan, came up with the plan to build a free-of-cost school for these children.
                    </p>

                    <p class="text-justify">
                        According to plan, Zoom Bangladesh open their first school at Segunbagicha under open sky.The School started with only 13 children. Day by day the number of children started increasing. Zoom Bangladesh have another school which is located at Gulistan , same as the Segunbagicha branch it is also under open sky.At present in total we have 300+ students studying in this 4 branch.

                    </p>

                    <p class="text-justify">
                        We have volunteer teacher from different renowned schools, colleges and universities.We provide nutritious food on daily basis cause without food it’s difficult to make these children concentrate and patience. Besides, educational materials such as pencil,eraser,pen,exercise book,bag,school dress etc. are also provided.
                    </p>
                    <p class="text-justify">

                        All these financial supports come through our volunteers and some well wisher.Zoom Bangladesh is a govt registered society under the joint stock company. The foundation is registered as Evergreen Zoom Bangladesh Foundation. At present we are looking forward to start our permanent campus at MirpurDuaripara, where these underprivileged children don’t have to sit under sky, rather they will get actual class room environment.
                    </p>



                    <div class="clearfix"></div>
                    <h2 class="mt-0 line-height-1 text-center">Objectives of Evergreen <span class="text-theme-colored"> Zoom Bangladesh Foundation</span></h2>
                    <div class="separator separator-rouned">
                        <i class="fa fa-cog fa-spin"></i>
                    </div>

                    <p class="text-justify">
                        <ul class="mt-10">
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To raise awareness on moral and legal rights and undertake of adequate arrangement protecting these rights within the community.</li>
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To established School, College, University for promote Education.</li>
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To Distribute relief goods, food, material etc to suffering people in any emergency situation.</li>
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To established training institute, for increase educated and non-educated peoples skill and technical knowledge.</li>
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To established Library, for increase reading habit for all peoples especially youth people.</li>
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To collect and initiative to publish old valuable script, folk script, Puthi etc.</li>
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To collect and display arts and painting through mobile museum.</li>
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To increase Literacy rate of the community people.</li>
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To ensure Employment creation through need base IGA program and reduction the poverty alleviation of disadvantage rural & urban people.</li>
                            <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> To Established Salter home, day care center, for street children.</li>
                        </ul>
                    </p>



                    <div class="clearfix"></div>
                    <h2 class="mt-0 line-height-1 text-center">The Legal Status <span class="text-theme-colored"> and Social Entity </span></h2>
                    <div class="separator separator-rouned">
                        <i class="fa fa-cog fa-spin"></i>
                    </div>

                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th>Registration Authority</th>
                                <td>Registration No</td>
                                <td>Date of Registration</td>
                            </tr>
                            @foreach($legality as $key => $value)
                            <tr>
                                <th>{{ $value->name }}</th>
                                <td>{{ $value->regi_no }}</td>
                                <td>{{ $value->date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="clearfix"></div>
                            <h2 class="mt-0 line-height-1 text-center">The Legalily  <span class="text-theme-colored">Certificate</span></h2>
                            <div class="separator separator-rouned">
                                <i class="fa fa-cog fa-spin"></i>
                            </div>
                            <div class="owl-carousel-1col" data-nav="true">
                                @foreach($legality as $key => $value)
                                <div class="item">
                                    <div class="box-hover-effect effect1 mb-sm-30">

                                        <img src="frontant/legality/{{ $value->certificate}}" />
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="mt-0 line-height-1 text-center">
                                Core Values of Evergreen<br>
                                <span class="text-theme-colored">
                                    Zoom Bangladesh Foundation
                                </span>
                            </h2>
                            <p class="text-justify">
                                <ul class="mt-10">
                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> <b>Justice:</b> We are the supporters of all justice and are struggling for it.</li>
                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i><b>Honesty and Integrity:</b> We keep own honesty to all principles of organization and pay integrity to the interest of Evergreen Zoom Bangladesh Foundation</li>
                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> Gender equity: We try to respect of each other and believe that the women folk are human being too. They have equal rights as human being.</li>
                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> <b>Transparency and accountability:</b> We have no confusion in transparency and accountability to the people we work for and with whom.</li>
                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i> <b>Responsiveness:</b> We are responsive to the peoples need and aspiration of local communities.</li>
                                </ul>
                            </p>
                        </div>

                    </div>


                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider: Became a Volunteers 2 -->
    <!-- Section: Testimonials and Logo -->
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