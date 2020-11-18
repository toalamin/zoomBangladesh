@extends('backend_layouts.app')

@section('title')
Project Category List
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
            <li class="active">Project Category Setup</li>
        </ul>
        <ul class="breadcrumb pull-right">
            <li>
                <a title="Add New Project Category" class="financeAddPermission btn btn-sm btn-success" href="{{ route('projectCategory.create') }}">
                    <i class="ace-icon fa fa-plus"></i>
                    Add New Project Category
                </a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-header">
                Project Category List
            </div>
            <div>
                <table id="example" class="table table-striped table-bordered table-hover" style="width:100%!important">
                    <thead>
                        <tr>
                            <th width="10%">Sl</th>
                            <th width="10%">Title</th>
                            <th width="10%">ShortDescription</th>
                            <th width="10%">Image</th>
                            <th width="10%">Raise</th>
                            <th width="10%">Success</th>
                            <th width="10%">Goal</th>
                            <th width="10%">global</th>
                            <th width="10%">Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 
                            // echo "<pre>";
                            // print_r($proejctCategory);
                            // die;
                        
                        ?>



                        @foreach($proejctCategory as $key => $value)

                        <?php 
                        
                        $result = str_replace("<p>","",$value->short_description);
                        $result = str_replace("</p>","",$value->short_description);
                        
                        ?>

                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->title }}</td>
                            <td><?php echo substr($result, 0, 200);?></td>
                            <td><img src="frontant/projectCategory/{{$value->image}}" height="50px" width="50px" /></td>
                            <td>{{ $value->raise }}</td>
                            <td>{{ $value->success }}</td>
                            <td>{{ $value->goal }}</td>
                            <td>{{ $value->global }}</td>
                            <td>
                                @if ($value->visible === 1)
                                <span class="label label-lg label-success arrowed-in arrowed-in-right">Running</span>
                                @elseif($value->visible == 2)
                                <span class="label label-lg label-danger arrowed-in arrowed-in-right">Complate</span>
                                @else
                                <span class="label label-lg label-info arrowed-in arrowed-in-right">Inactive</span>
                                @endif
                            </td>
                            <td nowrap>
                                @if($value->id !=1)
                                <form action="{{ route('projectCategory.destroy',$value->id) }}" method="POST">
                                    <a class="btn btn-xs btn-success blue" href="{{ route('projectCategory.edit',$value->id) }}">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger">

                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>
                                </form>
                                @endif
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