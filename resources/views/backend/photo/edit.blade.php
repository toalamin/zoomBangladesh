@extends('backend_layouts.app')
@section('title')
Edit photo
@endsection
@section('title')
Photo Edit
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
            <li class="active">Edit Photo</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Slider" class="financeAddPermission btn btn-sm btn-success" href="{{ route('photo.index') }}">
                    <i class="ace-icon fa fa-list"></i>
                    List
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <br>
        <div class="col-md-12">
            <form action="{{ route('photo.update',$photo->id ) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}


                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Category<span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <select class="form-control" name="category_id">
                            @foreach($category as $key => $value)
                            <option @if($photo->category_id == $value->id) selected @endif; value="{{ $value->id }}">{{ $value->title }}</option>
                            @endforeach

                        </select>
                        @error('category_id')
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Title <span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $photo->title  }}" name="title" class="form-control  " placeholder="Photo Title" />
                        @error('title')
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
                        <input type="hidden" value="{{ $photo->image }}" name="old_image" class="form-control" />
                        <img src="/frontant/photo/{{ $photo->image}}" height="50px" width="50px" />
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
                            <option @if($photo->visibility == 1) selected @endif; value="1">Visible (it will be show)</option>
                            <option @if($photo->visibility == 2) selected @endif; value="2">Invisisble(it will be hide)</option>
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