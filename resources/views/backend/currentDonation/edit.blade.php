@extends('backend_layouts.app')
@section('title')
Edit Current Donation
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
            <li class="active">Edit Current Donation</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add Current Donation" class="financeAddPermission btn btn-sm btn-success" href="{{ route('current.index') }}">
                    <i class="ace-icon fa fa-list"></i>
                    List
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <br>
        <div class="col-md-12">
            <form action="{{ route('current.update',$currentDonation->id ) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description <span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                    <textarea   maxlength="500" value="{{ old('description') }}" name="description" class="form-control  " placeholder="Description" >{{ $currentDonation->description }}</textarea>   
                   
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Raised <span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" maxlength="200" value="{{ $currentDonation->raised }}" name="raised" class="form-control  " placeholder="Raised" />
                        @error('raised')
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Goal <span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" maxlength="200" value="{{ $currentDonation->goal }}" name="goal" class="form-control  " placeholder="Goal" />
                        @error('goal')
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Success <span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <input type="text" maxlength="200" value="{{ $currentDonation->success }}" name="success" class="form-control  " placeholder="Success" />
                        @error('success')
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
                        <input type="file" value="" name="image" class="form-control" placeholder="Slider Description.." />
                        <input type="hidden" value="{{ $currentDonation->image }}" name="old_image" class="form-control"/>
                        <img src="/frontant/currentDonation/{{ $currentDonation->image }}" height="50px" width="50px" />
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
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Status<span style="color:red!important"> *</span></label>
                    <div class="col-sm-6">
                        <select class="form-control" name="status">
                            <option @if($currentDonation->visibility == 1) selected @endif; value="1">Visible (it will be show)</option>
                            <option @if($currentDonation->visibility == 2) selected @endif; value="2">Invisisble(it will be hide)</option>
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