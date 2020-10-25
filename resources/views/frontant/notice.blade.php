@extends('frontant_layouts.app')
@section('title')
Notice
@endsection
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Notice</h2>
      <ol>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li>Content</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Notice Board</h2>
    </div>

    <div class="row">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover table-sm">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Date</th>
            <th>Title</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          @foreach($notice as $key => $value)
          <tr>
            <td >{{ $key+1 }}</td>
            <td>{{ $value->created_at}}</td>
            <td>{{ $value->title }}</td>
            <td><?php echo $value->description ?></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>

    {{ $notice->links() }}

  </div>
</section>
@endsection