@extends('backend_layouts.app')

@section('title')
FAQ List
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
            <li class="active">FAQ Setup</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Team" class=" btn btn-sm btn-success" href="{{ route('faq.create') }}">
                    <i class="ace-icon fa fa-plus"></i>
                    Add New
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
                FAQ List
            </div>
            <div>
                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="10%">Question Type</th>
                            <th width="20%">Question</th>
                            <th width="30%">Answer</th>
                            <th width="10%">status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faq as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td> @if($value->type == 1) English @else Bangla @endif</td>
                            <td>{{ $value->question }}</td>
                            <td><?php echo $value->answer ?></td>
                            <td>
                                @if ($value->visibility === 1)
                                <span class="label label-lg label-success arrowed-in arrowed-in-right">Active</span>
                                @else
                                <span class="label label-lg label-danger arrowed-in arrowed-in-right">Inactive</span>
                                @endif
                            </td>

                            <td nowrap>
                                <form action="{{ route('faq.destroy',$value->id) }}" method="POST">
                                    <a class="btn btn-xs btn-success blue" href="{{ route('faq.edit',$value->id) }}">
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