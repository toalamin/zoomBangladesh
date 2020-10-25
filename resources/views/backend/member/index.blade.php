@extends('backend_layouts.app')
@section('title')
Member List
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
            <li class="active">Member Setup</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Member" class="financeAddPermission btn btn-sm btn-success" href="{{ route('member.create') }}">
                    <i class="ace-icon fa fa-plus"></i>
                    Add New Member
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
                Member List
            </div>
            <div>
                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="5%">Sl</th>
                            <th width="10%">Picture</th>
                            <th width="5%">Type</th>
                            <th width="10%">Name</th>
                            <th width="10%">E-mail</th>
                            <th width="10%">Phone</th>
                            <th width="15%">Present Address</th>
                            <th width="15%">Permanent Address</th>
                            <th>Status </th>
                            <th width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($member as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td><img src="{{ asset('uploads/member/'.$value->image) }}" height="50px" width="50px" /></td>
                            <td>@if($value->type == 1) General @else Lifetime @endif</td>
                            <td>{{ $value->full_name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->present_address }}</td>
                            <td>{{ $value->permanent_address }}</td>
                            <td>
                                @if ($value->visibility === 1)
                                <span class="label label-lg label-success arrowed-in arrowed-in-right">Active</span>
                                @else
                                <span class="label label-lg label-danger arrowed-in arrowed-in-right">Inactive</span>
                                @endif
                            </td>
                            <td nowrap>
                                <form action="{{ route('member.destroy',$value->id) }}" method="POST">
                                    <a class="btn btn-xs btn-success blue" href="{{ route('member.edit',$value->id) }}">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger">

                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>
                                </form>
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