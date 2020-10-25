@extends('frontant_layouts.app')
@section('title')
Video Gallery
@endsection
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Video Gallery</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Content</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->

<section id="team" class="team section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Video <strong>Gallery</strong></h2>
           
        </div>
        <div class="row">
            @foreach($video as $key => $eachVideo)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                    <iframe width="255" height="255" src="{{ $eachVideo->link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="member-info">
                        <h4>{{ $eachVideo->title }}</h4>
                       
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $video->links() }}
    </div>
</section><!-- End Our Team Section -->
@endsection