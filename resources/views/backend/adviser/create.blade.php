@extends('backend_layouts.app')
@section('title')
Add New Adviser
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
            <li class="active">Add New Adviser Committe</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Historical Place" class="financeAddPermission btn btn-sm btn-success" href="{{ route('executive.committee.index') }}">
                    <i class="ace-icon fa fa-list"></i>
                    List
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <br>
        <div class="col-md-12">
            <form action="{{ route('adviser.committee.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}


                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Type<span style="color:red!important"> *</span></label>
                    <div class="col-sm-7">
                        <select multiple="" class="chosen-select form-control" name="member_id[]" id="form-field-select-4" data-placeholder="Choose a State...">

                            @foreach($member as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->full_name }}</option>
                            @endforeach
                        </select>
                        @error('member_id')
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
                    <label class="col-sm-3  control-label no-padding-right" for="form-field-1"> Duration <span style="color:red!important"> *</span></label>
                    <div class="col-sm-7  ">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar bigger-110"></i>
                            </span>

                            <input class="form-control" type="text" value="{{ old('duration') }}" readonly name="duration" id="id-date-range-picker-1" />
                        </div>
                        @error('duration')
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
                        <input type="text" value="{{ old('designation') }}" name="designation" class="form-control  " placeholder="Designation" />
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




                <div class="clearfix form-actions">
                    <div class="col-md-offset-4 col-md-4">
                        <button class="btn btn-info" type="submit">
                            <i class="ace-icon fa fa-check bigger-110"></i>
                            Save
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