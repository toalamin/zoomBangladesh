@extends('backend_layouts.app')
@section('title')
Speech List
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
            <li class="active">Speech Setup</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Slider" class="financeAddPermission btn btn-sm btn-success" href="{{ route('speech.create') }}">
                    <i class="ace-icon fa fa-plus"></i>
                    Add New Speech
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
                Speech List
            </div>
            <div>
                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="20%">Title</th>
                            <th width="40%">Description</th>
                            <th width="10%">Image</th>
                            <th width="10%">Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($speech as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->description }}</td>
                            <td><img src="{{ asset('uploads/speech/'.$value->image) }}" height="50px" width="50px" /></td>
                            <td>
                                @if ($value->visibility === 1)
                                <span class="label label-lg label-success arrowed-in arrowed-in-right">Active</span>
                                @else
                                <span class="label label-lg label-danger arrowed-in arrowed-in-right">Inactive</span>
                                @endif
                            </td>
                            <td nowrap>
                                <form action="{{ route('speech.destroy',$value->id) }}" method="POST">
                                    <a class="btn btn-xs btn-success blue" href="{{ route('speech.edit',$value->id) }}">
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