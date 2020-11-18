@extends('backend_layouts.app')

@section('title')
Child Sponsor  List
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
            <li class="active">Sponsor Featured Setup</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <!-- <a title="Add New Child Sponsoor" class="financeAddPermission btn btn-sm btn-success" href="{{ route('child.create') }}">
                    <i class="ace-icon fa fa-plus"></i>
                    Add New
                </a> -->
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
            Child   Featured List
            </div>
            <div>
                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                           
                            <th width="70%">Description</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($featured as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td><?php echo  $value->description; ?></td>
                            <td nowrap>
                                <form action="{{ route('child.destroy',$value->id) }}" method="POST">
                                    <a class="btn btn-xs btn-success blue" href="{{ route('featured.edit',$value->id) }}">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                   
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