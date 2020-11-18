@extends('frontant_layouts.app')
@section('title')
Contact Us
@endsection
@section('css')
@endsection
@section('content')
<!-- Start main-content -->
<div class="main-content">
    <section class="inner-header divider parallax layer-overlay overlay-white-8" style="background-color: red!important;">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="line-height-1 mt-0 mb-0 pb-20 text-white">Become a Volunteers</h2>
                        <p class="mb-30 text-white">Join our volunteer platform under the Youth Development Program that provides the opportunity to empower the youth, facilitate volunteerism, foster self-resilience and growth as well as equipping them with the necessary tools to shape them for a meaningful future. </p>

                    </div>
                    <div class="col-md-5">
                        <div class="fluid-video-wrapper">
                            <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/bxiQRD2_8zQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="divider parallax layer-overlay overlay-dark-8" style="background: url('/frontant/images/bg/bg4.jpg') center center / cover fixed;">
        <div class="container-fluid">
            <div class="row equal-height">
                <div class="col-md-6 col-md-offset-3" style="min-height: 40.93em;">
                    <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Become a Volunteer</h3>
                    <form id="" class="bg-light p-30 pb-15" name="job_apply_form" action="{{ route('volunteer.store') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        @csrf
                    
                        @if($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                    <li>{{ $error}}</li>
                            @endforeach
                        </ul>

                        </div>

@endif
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_sex">Divission <small>*</small></label>
                                    <select id="form_sex" name="divission" class="form-control required" aria-required="true">
                                        <option selected disabled value="Choose...">Choose...</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Mymenshing">Mymenshing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_branch">Choose District <small>*</small></label>
                                    <select id="form_branch" name="district" class="form-control required" aria-required="true">
                                        <option selected disabled value="Choose...">Choose...</option>
                                        <option value="Barisal">Barisal</option>
                                        <option value="Bogra">Bogra</option>
                                        <option value="Brahmanbaria">Brahmanbaria</option>
                                        <option value="Chadpur" selected="selected">Chadpur</option>
                                        <option value="Chittagong">Chittagong</option>
                                        <option value="Comilla">Comilla</option>
                                        <option value="Cox's Bazar">Cox's Bazar</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Dinajpur">Dinajpur</option>
                                        <option value="Jessore">Jessore</option>
                                        <option value="Jhenaidah">Jhenaidah</option>
                                        <option value="Khulna">Khulna</option>
                                        <option value="Kushtia">Kushtia</option>
                                        <option value="Lalmonirhat">Lalmonirhat</option>
                                        <option value="Magura">Magura</option>
                                        <option value="Moluvibazar">Moluvibazar</option>
                                        <option value="Mymensingh">Mymensingh</option>
                                        <option value="Patuakhali">Patuakhali</option>
                                        <option value="Rajshahi">Rajshahi</option>
                                        <option value="Rangamati">Rangamati</option>
                                        <option value="Rangpur">Rangpur</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Narayanganj">Narayanganj</option>
                                        <option value="Barguna">Barguna</option>
                                        <option value="Bhola">Bhola</option>
                                        <option value="Jhalokati">Jhalokati</option>
                                        <option value="Pirojpur">Pirojpur</option>
                                        <option value="Bandarban">Bandarban</option>
                                        <option value="Feni">Feni</option>
                                        <option value="Khagrachhari">Khagrachhari</option>
                                        <option value="Lakshmipur">Lakshmipur</option>
                                        <option value="Noakhali">Noakhali</option>
                                        <option value="Faridpur">Faridpur</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="Gopalganj">Gopalganj</option>
                                        <option value="Jamalpur">Jamalpur</option>
                                        <option value="Kishoreganj">Kishoreganj</option>
                                        <option value="Madaripur">Madaripur</option>
                                        <option value="Manikganj">Manikganj</option>
                                        <option value="Munshiganj">Munshiganj</option>
                                        <option value="Narsingdi">Narsingdi</option>
                                        <option value="Netrakona">Netrakona</option>
                                        <option value="Rajbari">Rajbari</option>
                                        <option value="Shariatpur">Shariatpur</option>
                                        <option value="Sherpur">Sherpur</option>
                                        <option value="Tangail">Tangail</option>
                                        <option value="Bagerhat">Bagerhat</option>
                                        <option value="Chuadanga">Chuadanga</option>
                                        <option value="Meherpur">Meherpur</option>
                                        <option value="Narail">Narail</option>
                                        <option value="Satkhira">Satkhira</option>
                                        <option value="Joypurhat">Joypurhat</option>
                                        <option value="Naogaon">Naogaon</option>
                                        <option value="Natore">Natore</option>
                                        <option value="Nawabganj">Nawabganj</option>
                                        <option value="Pabna">Pabna</option>
                                        <option value="Sirajganj">Sirajganj</option>
                                        <option value="Gaibandha">Gaibandha</option>
                                        <option value="Kurigram">Kurigram</option>
                                        <option value="Nilphamari">Nilphamari</option>
                                        <option value="Panchagarh">Panchagarh</option>
                                        <option value="Thakurgaon">Thakurgaon</option>
                                        <option value="Habiganj">Habiganj</option>
                                        <option value="Sunamganj">Sunamganj</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_sex">Gender <small>*</small></label>
                                    <select id="form_sex" name="gender" class="form-control required" aria-required="true">
                                        <option selected disabled value="Choose...">Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_branch">Blood Group <small>*</small></label>
                                    <select id="form_branch" name="blood_group" class="form-control required" aria-required="true">
                                        <option selected disabled value="Choose...">Choose...</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="Do not know yet">Do not know yet</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_name">Full Name <small>*</small></label>
                                    <input id="form_name" name="full_name" type="text" placeholder="Enter Name" required="" class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_email">Present Address <small>*</small></label>
                                    <input id="form_email" name="present_address" class="form-control required" type="text" placeholder="Address" aria-required="true">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_name">E-mail <small>*</small></label>
                                    <input id="form_name" name="email" type="email" placeholder="E-mail" required="" class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_email">Phone <small>*</small></label>
                                    <input id="form_email" name="phone" class="form-control required" type="text" placeholder="Phone" aria-required="true">
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="form_message">Describe About Your self <small>*</small></label>
                            <textarea id="form_message" name="short_description" class="form-control required" rows="3" placeholder="Your cover letter/message sent to the employer" aria-required="true"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="form_attachment">C/V Upload</label>
                            <input id="form_attachment" name="image" class="file" type="file" multiple="" data-show-upload="false" data-show-caption="true">
                        </div>
                        <div class="form-group">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Apply Now</button>
                        </div>
                    </form>
                    <!-- Job Form Validation-->
                    <script type="text/javascript">
                        $("#volunteer_apply_form").validate({
                            submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType: 'json',
                                    success: function(data) {
                                        if (data.status == 'true') {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function() {
                                            $(form_result_div).fadeOut('slow')
                                        }, 6000);
                                    }
                                });
                            }
                        });
                    </script>
                </div>

            </div>
        </div>
    </section>



</div>
@endsection