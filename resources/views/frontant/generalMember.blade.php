@extends('frontant_layouts.app')
@section('title')
General Member
@endsection
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>General Member</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Content</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->

<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>General Member</h2>
        </div>

        
        <div class="table-responsive row">
            <table class="table table-bordered table-striped table-hover table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Name & Details</th>
                        <th>Present Address</th>
                        <th>Permanent Address</th>
                        <th>Mobile</th>
                        <th>Facebook</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($member as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>
                            @if(!empty($value->image))
                            <img src="{{ asset('uploads/member/') }}/{{ $value->image}}" height="150px" width="100px" />
                            @else
                            <img src="{{ asset('default.png') }}" height="150px" width="100px" />
                            @endif
                        </td>
                        <td>
                            <?php echo $value->full_name; ?><br>
                            <b>Father:</b> <?php echo $value->father; ?><br>
                            <b>Education:</b><?php echo $value->education; ?><br>
                            <b>Institute:</b> <?php echo $value->last_institution; ?>

                        </td>
                        <td><?php echo $value->present_address ?></td>
                        <td><?php echo $value->permanent_address ?></td>
                        <td><?php echo $value->phone ?></td>
                        <td><a target="_blank" href="{{ $value->facebook }}">Facebook</a></td>
                        <td><?php echo $value->email ?></td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $member->links() }}
    </div>
</section>
<!-- ======= Contact Section ======= -->


@endsection