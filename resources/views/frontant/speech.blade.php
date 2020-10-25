@extends('frontant_layouts.app')
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Speech</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Content</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->



<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Speech</h2>
        </div>
        <div class="row">
            @foreach($speech as $key => $value)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="member d-flex align-items-start" sty>
                    <div style="width: 40%;" class="pic">
                        <img src="{{ 'uploads/speech/'.$value->image }}" width="200px" height="300px" class="img-circle" alt="">
                    </div>

                    <div style="width:60%" class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <h4>{{ $value->title }}</h4>
                        <p class="text-justify">
                            <?php echo $value->description ?>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection