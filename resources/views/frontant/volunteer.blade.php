@extends('frontant_layouts.app')
@section('title')
Contact Us
@endsection
@section('css')
@endsection
@section('content')
<!-- Start main-content -->
<div class="main-content">
    <section class="inner-header divider parallax layer-overlay overlay-white-8">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="line-height-1 mt-0 mb-0 pb-20 text-white">Become a Volunteers</h2>
                        <p class="mb-30 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, et placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis! Quidem, repellendus exit placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis.</p>
                        <a class="btn btn-dark btn-theme-colored btn-lg btn-flat pull-left pl-30 pr-30" href="#">Join Us</a>
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
                <div class="col-md-4 col-md-offset-1" style="min-height: 40.93em;">
                    <h3 class="bg-theme-colored p-15 pl-30 mb-0 text-white">Become a Volunteer</h3>
                    <form id="volunteer_apply_form" class="bg-light p-30 pb-15" name="job_apply_form" action="includes/become-volunteer.php" method="post" enctype="multipart/form-data" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_name">Name <small>*</small></label>
                                    <input id="form_name" name="form_name" type="text" placeholder="Enter Name" required="" class="form-control" aria-required="true">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_email">Email <small>*</small></label>
                                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_sex">Sex <small>*</small></label>
                                    <select id="form_sex" name="form_sex" class="form-control required" aria-required="true">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="form_branch">Choose Branch <small>*</small></label>
                                    <select id="form_branch" name="form_branch" class="form-control required" aria-required="true">
                                        <option value="UK">UK</option>
                                        <option value="USA">USA</option>
                                        <option value="Australia">Australia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form_message">Message <small>*</small></label>
                            <textarea id="form_message" name="form_message" class="form-control required" rows="3" placeholder="Your cover letter/message sent to the employer" aria-required="true"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="form_attachment">C/V Upload</label>
                            <input id="form_attachment" name="form_attachment" class="file" type="file" multiple="" data-show-upload="false" data-show-caption="true">
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
                <div class="col-md-6 hidden-xs" style="min-height: 40.93em;">
                    <div class="p-50">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-50 text-white">
                                <div class="funfact text-center">
                                    <div class="funfact-content">
                                        <div class="funfact-icon">
                                            <i class="pe-7s-smile font-50 text-white"></i>
                                        </div>
                                        <h2 data-animation-duration="2000" data-value="754" class="animate-number text-theme-colored font-30 mt-10 appeared">754</h2>
                                        <h4 class="text-uppercase text-white">Happy Donators</h4>
                                        <p>Architecto ullam tenetur quia nemo ratione tempora.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-50 text-white">
                                <div class="funfact text-center">
                                    <div class="funfact-content">
                                        <div class="funfact-icon">
                                            <i class="pe-7s-rocket font-50 text-white"></i>
                                        </div>
                                        <h2 data-animation-duration="2000" data-value="4469" class="animate-number text-theme-colored font-30 mt-10 appeared">4,469</h2>
                                        <h4 class="text-uppercase text-white">Success Mission</h4>
                                        <p>Architecto ullam tenetur quia nemo ratione tempora.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-md-50 text-white mt-20">
                                <div class="funfact text-center">
                                    <div class="funfact-content">
                                        <div class="funfact-icon">
                                            <i class="pe-7s-add-user font-50 text-white"></i>
                                        </div>
                                        <h2 data-animation-duration="2000" data-value="1106" class="animate-number text-theme-colored font-30 mt-10 appeared">1,106</h2>
                                        <h4 class="text-uppercase text-white">Volunteer Reached</h4>
                                        <p>Architecto ullam tenetur quia nemo ratione tempora.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mb-md-50 text-white mt-20">
                                <div class="funfact text-center">
                                    <div class="funfact-content">
                                        <div class="funfact-icon">
                                            <i class="pe-7s-global font-50 text-white"></i>
                                        </div>
                                        <h2 data-animation-duration="2000" data-value="698" class="animate-number text-theme-colored font-30 mt-10 appeared">698</h2>
                                        <h4 class="text-uppercase text-white">Globalization Work</h4>
                                        <p>Architecto ullam tenetur quia nemo ratione tempora.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
@endsection