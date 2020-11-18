@extends('backend_layouts.app')
@section('title')
Mission & Vission
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
            <li class="active">System Config Setup</li>
        </ul>
        <ul class="breadcrumb pull-right">

        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
                System Config Info
            </div>
            <div>
                <table id="example2" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Website</th>
                            <td>{{ $systemConfig->website }}</td>
                        </tr>

                        <tr>
                            <th width="10%">Name</th>
                            <td>{{ $systemConfig->name }}</td>
                        </tr>
                        <tr>
                            <th width="10%">E-mail</th>
                            <td>{{ $systemConfig->email }}</td>
                        </tr>

                        <tr>
                            <th width="10%">Phone</th>
                            <td>{{ $systemConfig->phone }}</td>
                        </tr>

                        <tr>
                            <th width="10%">Address</th>
                            <td>{{ $systemConfig->address }}</td>
                        </tr>

                        <tr>
                            <th width="10%">Logo</th>
                            <td><img src="/frontant/images/logo/{{$systemConfig->logo}}" height="100px" width="100px"/></td>
                        </tr>
                        <tr>
                            <th width="10%">Banner Image</th>
                            <td><img src="/frontant/images/banner/{{$systemConfig->default_banner_image}}" height="100px" width="100px"/></td>
                        </tr>

                        <tr>
                            <th width="10%">Facebook Link</th>
                            <td>{{ $systemConfig->fb_link }}</td>
                        </tr>

                        <tr>
                            <th width="10%">Youtube Link</th>
                            <td>{{ $systemConfig->youtube_link }}</td>
                        </tr>
                        <tr>
                            <th width="10%">Skypee</th>
                            <td>{{ $systemConfig->skypee }}</td>
                        </tr>
                        <tr>
                            <th width="10%">Instragram</th>
                            <td>{{ $systemConfig->instagram_link }}</td>
                        </tr>
                        <tr>
                            <th width="10%">Twitter</th>
                            <td>{{ $systemConfig->twitter_link }}</td>
                        </tr>
                        <tr>
                            <th width="10%">Linkedin</th>
                            <td>{{ $systemConfig->linkedin }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2"><a href="{{ route('editSystemConfig',$systemConfig->id) }}" class="btn btn-success">Update</a></td>
                        </tr>
                    </tbody>

                </table>

            </div>

        </div><!-- /.col -->

    </div><!-- /.page-content -->

    @endsection


    @section('script')
    @endsection