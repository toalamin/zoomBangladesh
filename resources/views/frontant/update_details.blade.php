@extends('frontant_layouts.app')
@section('title')
Update Details
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
                        <h2 class="title text-white">Zoom Bangladesh Update</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php



    ?>
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-40">
                        <a class="image-popup-vertical-fit" title="{{ $updateinfo->title }}" href="/frontant/update/{{ $updateinfo->image }}"><img src="/frontant/update/{{ $updateinfo->image }}" alt=""></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-40">
                        <h3>{{ $updateinfo->title }}</h3>

                        <p><?php echo $updateinfo->description ?></p>

                    </div>
                </div>

                
            </div>
            
        </div>
    </section>

</div>
@endsection