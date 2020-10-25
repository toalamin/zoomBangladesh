@extends('backend_layouts.app')
@section('title')
Web Contact List
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
            <li class="active">Contact List</li>
        </ul>
        <ul class="breadcrumb pull-right">
            
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
                Website Contact Request List
            </div>
            <div>
                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="10%">Name</th>
                            <th width="20%">E-mail</th>
                            <th width="20%">Subject</th>
                            <th width="30%">Message</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($contact as $key => $value)

                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->subject }}</td>
                            <td>{{ $value->message }}</td>
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