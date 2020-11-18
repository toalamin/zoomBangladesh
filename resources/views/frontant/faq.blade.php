@extends('frontant_layouts.app')
@section('title')
Contact Us
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
            <h2 class="title text-white">Zoom Bangladesh FAQ</h2>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="mt-0 line-height-1 text-center"><span class="text-theme-colored"> FAQ</span></h2>
          <div class="separator separator-rouned">
            <i class="fa fa-cog fa-spin"></i>
          </div>
        </div>
        <div class="col-md-6">
          <div id="accordion1" class="panel-group accordion">
            @foreach($faqEnglish as $key => $value)
            <div class="panel">
              <div class="panel-title   panel-success"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion8{{$key}}" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q.{{$value->question}}?</strong></a> </div>
              <div id="accordion8{{$key}}" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                <div class="panel-content">
                  <p><?php echo $value->answer; ?></p>

                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>

        <div class="col-md-6">
          <div id="accordion2" class="panel-group accordion">
            @foreach($faqBangla as $key => $value)
            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion2" data-toggle="collapse" href="#accordion5{{$key}}" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong> {{$value->question}}?</strong></a> </div>
              <div id="accordion5{{$key}}" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                <div class="panel-content">
                  <p><?php echo $value->answer; ?></p>
                </div>
              </div>
            </div>

            @endforeach


          </div>
        </div>





      </div>
    </div>
  </section>
</div>


@endsection