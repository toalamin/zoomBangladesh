@extends('backend_layouts.app')

@section('title')
Edit notice
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
            <li class="active">Edit Monthly Employee</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Slider" class="financeAddPermission btn btn-sm btn-success" href="{{ route('monthly.index') }}">
                    <i class="ace-icon fa fa-list"></i>
                    List
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <br>
        <div class="col-md-12">
            <form action="{{ route('monthly.update',$monthly->id ) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1">Type<span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <select class="form-control" name="type">
                            <option @if($monthly->type == 1) selected @endif value="1">Month Of Employee</option>
                            <option @if($monthly->type == 2) selected @endif value="2">Year Of Employee</option>
                        </select>
                        @error('employee_id')
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Employee <span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <select class="form-control" name="employee_id">
                            @foreach($employee as $key => $value)
                            <option @if($monthly->employee_id == $value->id) selected @endif value="{{ $value->id }}">{{ $value->full_name }}</option>
                            @endforeach
                        </select>
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
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Description<span style="color:red!important"> *</span></label>
                    <div class="col-sm-8">
                        <textarea class="ckeditor form-control" placeholder="Description" name="description">{{ $monthly->description }}</textarea>
                        @error('description')
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
                            <option @if($monthly->visibility == 1) selected @endif; value="1">Visible (it will be show)</option>
                            <option @if($monthly->visibility == 2) selected @endif; value="2">Invisisble(it will be hide)</option>
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