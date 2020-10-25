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
            <li class="active">Mission Setup</li>
        </ul>
        <ul class="breadcrumb pull-right">
            
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
                Mission Info List
            </div>
            <div>
                <table id="example2" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="30%">Title</th>
                            <th width="50%">Description</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td>1</td>
                            <td>{{ $mission->title }}</td>
                            <td>{{ $mission->description }}</td>
                          
                            
                            <td nowrap>
                                <form action="{{ route('slider.destroy',$mission->id) }}" method="POST">
                                    <a class="btn btn-xs btn-success blue" href="{{ route('mission.edit',$mission->id) }}">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>

                                    </a>

                                    @csrf
                                    @method('DELETE')
                                    
                                </form>
                            </td>
                        </tr>
                      

                    </tbody>

                </table>

            </div>

        </div><!-- /.col -->

    </div><!-- /.page-content -->

    @endsection


    @section('script')
    @endsection