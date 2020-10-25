@extends('backend_layouts.app')
@section('title')
Edit Member
@endsection
@section('content')
<!-- /section:basics/content.breadcrumbs -->

<div class="page-content">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li>Setup</li>
            <li class="active">Edit Member</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Slider" class="financeAddPermission btn btn-sm btn-success" href="{{ route('member.index') }}">
                    <i class="ace-icon fa fa-list"></i>
                    List
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <br>
        <div class="col-md-12">
            <form action="{{ route('member.update',$member->id ) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Type<span style="color:red!important"> *</span></label>
                    <div class="col-sm-7">
                        <select class="form-control" name="type">
                            <option @if($member->type == 1) selected @endif value="1">General</option>
                            <option @if($member->type == 2) selected @endif value="2">Lifetime</option>
                        </select>
                        <!-- <div  class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        Warning!
                                    </strong>

                                
                                    <br />
                                </div> -->

                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Full Name <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->full_name }}" name="full_name" class="form-control  " placeholder="Full Name" />
                        @error('full_name')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror

                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1">Father <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->father }}" name="father" class="form-control  " placeholder="Father Name" />
                        @error('father')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Email <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->email }}" name="email" class="form-control  " placeholder="E-mail" />
                        @error('email')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Phone <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->phone }}" name="phone" class="form-control  " placeholder="01710000000" />
                        @error('phone')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Facebook Link<span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->facebook }}" name="facebook" class="form-control  " placeholder="Facebook" />
                        @error('facebook')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Linkedin <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->linked }}" name="linked" class="form-control  " placeholder="Linkedin" />
                        @error('linked')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Instagram <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->instagram }}" name="instagram" class="form-control  " placeholder="Instagram" />
                        @error('instagram')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Last Education <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->education }}" name="education" class="form-control  " placeholder="Last Education" />
                        @error('education')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Last Institution <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->last_institution }}" name="last_institution" class="form-control  " placeholder="Last Institution" />
                        @error('last_institution')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Designation <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="text" value="{{ $member->designation }}" name="designation" class="form-control  " placeholder="Designation" />
                        @error('designation')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Presend Address<span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <textarea class="ckeditor form-control" placeholder="Presend Address" name="present_address">{{ $member->present_address }}</textarea>
                        <!-- <textarea type="text" rows="10" value="" name="description" class="form-control" placeholder="Slider Description.."></textarea> -->
                        @error('present_address')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}

                            <br />
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Permanent Address<span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <textarea class="ckeditor form-control" placeholder="Permanenet Address" name="permanent_address">{{ $member->permanent_address }}</textarea>
                        <!-- <textarea type="text" rows="10" value="" name="description" class="form-control" placeholder="Slider Description.."></textarea> -->
                        @error('permanent_address')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}
                            <br />
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Picture<span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <input type="file" value="" name="file" class="form-control" placeholder="Slider Description.." />
                        <input type="hidden" value="{{ $member->image }}" name="old_image" class="form-control" />
                        <img src="{{ asset('uploads/member/'.$member->image) }}" height="50px" width="50px" />
                        @error('file')
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <strong>
                                <i class="ace-icon fa fa-check"></i>
                                Warning!
                            </strong>
                            {{ $message }}

                            <br />
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1">Status<span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <select class="form-control" name="status">
                            <option @if($member->visibility == 1) selected @endif value="1">Visible (it will be show)</option>
                            <option @if($member->visibility == 2) selected @endif value="2">Invisisble(it will be hide)</option>
                        </select>
                        <!-- <div  class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        Warning!
                                    </strong>

                                
                                    <br />
                                </div> -->

                    </div>
                </div>



                <div class="clearfix form-actions">
                    <div class="col-md-offset-4 col-md-4">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Update
                        </button>

                        &nbsp; &nbsp;
                        <button class="btn" type="reset">
                            <i class="ace-icon fa fa-undo bigger-110"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </form>

        </div><!-- /.col -->

    </div><!-- /.page-content -->

    @endsection


    @section('script')

    <script src="http://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <!-- <script src="{{ asset('backend/asset/ckeditor.js') }}"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
    @endsection