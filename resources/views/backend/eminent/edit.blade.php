@extends('backend_layouts.app')
@section('title')
Eminent People Edit
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
            <li class="active">Eminent People</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Historical Place" class="financeAddPermission btn btn-sm btn-success" href="{{ route('eminent.people.index') }}">
                    <i class="ace-icon fa fa-list"></i>
                    List
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <br>
        <div class="col-md-12">
            <form action="{{ route('eminent.people.update',$eminentPeople->id ) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Name <span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $eminentPeople->name }}" name="name" class="form-control  " placeholder="Name" />
                        @error('name')
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> E-mail <span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $eminentPeople->email }}" name="email" class="form-control  " placeholder="E-mail" />
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Phone <span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $eminentPeople->phone }}" name="phone" class="form-control  " placeholder="Phone" />
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Designation <span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $eminentPeople->designation }}" name="designation" class="form-control  " placeholder="Designation" />
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Short Description <span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <textarea type="text" value="" name="short_description" class="form-control  " placeholder="Short Description" >{{ $eminentPeople->short_description }}</textarea>
                        @error('short_description')
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Facebook Link<span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                    <input type="text" value="{{ $eminentPeople->fb_link }}" name="fb_link" class="form-control  " placeholder="Facebook Link" />
                    <!-- <textarea class="ckeditor form-control" name="description"></textarea> -->
                        <!-- <textarea type="text" rows="10" value="" name="description" class="form-control" placeholder="Slider Description.."></textarea> -->
                        @error('fb_link')
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Linkedin<span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                    <input type="text" value="{{ $eminentPeople->linkedin }}" name="linkedin" class="form-control  " placeholder="Linkedin Link" />
                    <!-- <textarea class="ckeditor form-control" name="description"></textarea> -->
                        <!-- <textarea type="text" rows="10" value="" name="description" class="form-control" placeholder="Slider Description.."></textarea> -->
                        @error('linkedin')
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Instagram<span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                    <input type="text" value="{{ $eminentPeople->instagram  }}" name="instagram" class="form-control  " placeholder="instagram Link" />
                    <!-- <textarea class="ckeditor form-control" name="description"></textarea> -->
                        <!-- <textarea type="text" rows="10" value="" name="description" class="form-control" placeholder="Slider Description.."></textarea> -->
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Image<span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <input type="file" value="" name="file" class="form-control" placeholder="Slider Description.." />
                        <!-- <img src="{{ 'uploads/eminent/'.$eminentPeople->image }}" height="50px" width="50px"/> -->
                        <img src="{{ asset('uploads/eminent/'.$eminentPeople->image) }}" class="img-fluid" height="40px" alt="">
                        
                        <input type="hidden" name="old_image" value="{{ $eminentPeople->image }}"/>
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Status<span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <select class="form-control" name="status">
                            <option @if($eminentPeople->visibility == 1)  selected @endif value="1">Visible (it will be show)</option>
                            <option  @if($eminentPeople->visibility == 2)  selected @endif value="2">Invisisble(it will be hide)</option>
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