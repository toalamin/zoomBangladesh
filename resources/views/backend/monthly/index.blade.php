@extends('backend_layouts.app')

@section('title')
How Can Help Us
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
            <li class="active">Monthly Employee Setup</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Slider" class=" btn btn-sm btn-success" href="{{ route('monthly.create') }}">
                    <i class="ace-icon fa fa-plus"></i>
                    Add New 
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
                Monthly Employee List
            </div>
            <div>
                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="10%">Type</th>
                            <th width="10%">Employee</th>
                            <th width="10%">Branch</th>
                            <th width="40%">Description</th>
                          
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($monthly as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>@if($value->type == 1) Monthly @else Yearly @endif</td>
                            <td>{{ $value->team->full_name }}</td>
                            <td>{{ $value->team->branch }}</td>
                            <td><?php echo $value->description;?></td>
                            <td nowrap>
                                <form action="{{ route('monthly.destroy',$value->id) }}" method="POST">
                                    <a class="btn btn-xs btn-success blue" href="{{ route('monthly.edit',$value->id) }}">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <!-- <button type="submit" class="btn btn-xs btn-danger">

                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button> -->
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