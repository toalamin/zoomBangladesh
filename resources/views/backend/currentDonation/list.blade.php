@extends('backend_layouts.app')
@section('title')
Donation List
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
            <li class="active">Donation List</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <!-- <li>
                <a title="Add New Donation" class="financeAddPermission btn btn-sm btn-success" href="{{ route('current.create') }}">
                    <i class="ace-icon fa fa-plus"></i>
                    Add New Donation
                </a>
            </li> -->
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
               People Donation List
            </div>
            <div>
                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="10%">Porject </th>
                            <th width="10%">Payment Type</th>
                            <th width="10%">Donate Type</th>
                            <th width="10%">Country</th>
                            <th width="10%">Fullname</th>
                            <th width="10%">Phone</th>
                            <th width="10%">E-mail</th>
                            <th width="10%">Amount</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donate as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->project_category_id }}</td>
                            <td>{{ $value->payment_type }}</td>
                            <td>{{ $value->donate_type }}</td>
                            <td>{{ $value->country }}</td>
                            <td>{{ $value->full_name }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->amount }}</td>
                            
                            
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