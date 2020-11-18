@extends('backend_layouts.app')
@section('title')
Header Image List
@endsection
@section('css')
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
            <li class="active">Header Image Setup</li>
        </ul>
        <ul class="breadcrumb pull-right">
            
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
                Header Image Info 
            </div>
            <div>
                <table id="example2" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="30%">Page Name</th>
                            <th width="10%">Banner</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($header as $key => $value)
                        <tr>
                            <td>1</td>
                            <td>{{ $value->title }}</td>
                            <td><img height="50" width="50" src="frontant/header/{{ $value->image}}"/></td>
                            <td nowrap>
                               
                                    <a class="btn btn-xs btn-success blue" href="{{ route('header.edit',$value->id) }}">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </a>
                                   
                          
                            </td>
                        </tr>
                      @endforeach

                    </tbody>

                </table>

            </div>

        </div><!-- /.col -->

    </div><!-- /.page-content -->

    @endsection


    @section('script')
    @endsection