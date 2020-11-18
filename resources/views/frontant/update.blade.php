@extends('frontant_layouts.app')
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
            <h2 class="title text-white">Zoom Bangladesh Update</h2>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Contact Section ======= -->
  <section id="blog" data-bg-img="images/pattern/p8.png" style="background-image: url(&quot;images/pattern/p8.png&quot;);">
    <div class="container pb-80">

      <div class="section-content">
        <div class="row">

          @foreach($update as $key => $value)

          <div class="col-xs-12 col-sm-6 col-md-4">
            <article class="post clearfix mb-sm-30">
              <div class="entry-header">
                <div class="post-thumb thumb">
                  <img src="frontant/update/{{$value->image}}" alt="" class="img-responsive img-fullwidth">
                </div>
              </div>
              <div class="entry-content p-20 pr-10" style="max-height: 400px;">
                <div class="entry-meta media mt-0 no-bg no-border">
                  <div class="entry-date media-left flip text-center">
                    <ul>
                      <li class="font-16 font-weight-600 border-bottom bg-white-f1 pt-5 pr-15 pb-5 pl-15">{{ date('d',strtotime($value->date)) }}</li>
                      <li class="font-12 text-white text-uppercase bg-theme-colored pt-5 pr-15 pb-5 pl-15">{{ date('M',strtotime($value->date)) }}</li>
                    </ul>
                  </div>
                  <div class="media-body pl-10">
                    <div class="event-content pull-left flip">
                      <h4 class="entry-title text-white text-capitalize m-0"><a href="#"> <?php echo $description = substr($value->title, 0, 200);?></a></h4>
                      <!-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                      <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> -->
                    </div>
                  </div>
                </div>
                <?php

                $result = str_replace('<p>', '', $value->description);
                $result = str_replace('</p>', '', $value->description);
                $description = substr($result, 0, 200);

                ?>

                <p class="mt-10"><?php echo $description; ?>......</p>
                <div class="mt-10"> <a href="{{ route('update.details',$value->id) }}" class="btn btn-theme-colored btn-sm btn-block">Read More</a> </div>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </section>
</div>
@endsection