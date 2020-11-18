@extends('backend_layouts.app')
@section('title')
Slider Edit
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
            <li class="active">Edit Team</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New " class="financeAddPermission btn btn-sm btn-success" href="{{ route('teamm.index') }}">
                    <i class="ace-icon fa fa-list"></i>
                    List
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <br>
        <div class="col-md-12">
            <form action="{{ route('teamm.update',$team->id ) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Category<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <select class="form-control" name="team_category_id">
                            @foreach($category as $key => $value)
                            <option @if($team->team_category_id == $value->id) selected @endif value="{{ $value->id }}">{{ $value->title }}</option>
                            @endforeach

                        </select>
                        @error('team_category_id')
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Full Name <span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" value="{{ $team->full_name }}" name="full_name" class="form-control  " placeholder="Full Name" />
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Phone<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" value="{{ $team->phone }}" name="phone" class="form-control  " placeholder="Phone" />
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" value="{{ $team->email }}" name="email" class="form-control  " placeholder="E-mail" />
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Designation<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" value="{{ $team->designation }}" name="designation" class="form-control  " placeholder="Designation" />
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Branch<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" value="{{ $team->branch }}" name="branch" class="form-control  " placeholder="Designation" />
                        @error('branch')
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Facebook Link<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" value="{{ $team->fb_link }}" name="fb_link" class="form-control  " placeholder="Facebook Link" />
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Instagrame Link<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" value="{{ $team->insta_link }}" name="insta_link" class="form-control  " placeholder="Facebook Link" />
                        @error('insta_link')
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <textarea type="text" rows="10" value="" name="short_description" class="form-control" placeholder=" Description..">{{ $team->short_description }}</textarea>
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="file" value="" name="image" class="form-control" placeholder=" Description.." />
                        <input type="hidden" value="{{ $team->image }}" name="old_image" class="form-control" placeholder=" Description.." />
                        <img src="/frontant/team/{{$team->image}}" height="50" width="50"/>
                        @error('image')
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Status<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <select class="form-control" name="visibility">
                            <option @if($team->visibility == 1) selected @endif value="1">Visible (it will be show)</option>
                            <option @if($team->visibility == 2) selected @endif  value="2">Invisisble(it will be hide)</option>
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






    @endsection