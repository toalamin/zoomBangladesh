@extends('frontant_layouts.app')
@section('title')
Executive Committe List
@endsection
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Executive Committe</h2>
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
            <h2>Executive Member</h2>
        </div>


        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Name & Details</th>
                        <th>Designation</th>
                        <th>Present Address</th>
                        <th>Permanent Address</th>
                        <th>Mobile</th>
                        <th>Facebook</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($executive as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                            @if(!empty($value->member->image))
                            <img src="{{ asset('uploads/member/') }}/{{ $value->member->image}}" height="150px" width="100px" />
                            @else
                            <img src="{{ asset('default.png') }}" height="150px" width="100px" />
                            @endif
                        </td>
                        <td>
                            <?php echo $value->member->full_name; ?><br>
                           <b>Father:</b>  <?php echo $value->member->father; ?><br>
                            <b>Education:</b><?php echo $value->member->education; ?><br>
                            <b>Institute:</b> <?php echo $value->member->last_institution; ?>

                        </td>
                        <td><?php echo $value->designation ?><br>Duration: <?php echo $value->duration ?></td>
                        <td><?php echo $value->member->present_address ?></td>
                        <td><?php echo $value->member->permanent_address ?></td>
                        <td><?php echo $value->member->phone ?></td>
                        <td><a target="_blank" href="{{ $value->member->facebook }}">Facebook</a></td>
                        <td><?php echo $value->member->email ?></td>
                        <td><?php echo $value->member->description ?></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $executive->links() }}
    </div>
</section>
@endsection