@extends('backend_layouts.app')
@section('title')
Dashboard
@endsection


@section('css')


@endsection


@section('content')
<!-- /section:basics/content.breadcrumbs -->
<div class="page-content">
    <!-- #section:settings.box -->
    <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="ace-icon fa fa-cog bigger-130"></i>
        </div>

        <div class="ace-settings-box clearfix" id="ace-settings-box">
            <div class="pull-left width-50">
                <!-- #section:settings.skins -->
                <div class="ace-settings-item">
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <!-- /section:settings.skins -->

                <!-- #section:settings.navbar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <!-- /section:settings.navbar -->

                <!-- #section:settings.sidebar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <!-- /section:settings.sidebar -->

                <!-- #section:settings.breadcrumbs -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <!-- /section:settings.breadcrumbs -->

                <!-- #section:settings.rtl -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>

                <!-- /section:settings.rtl -->

                <!-- #section:settings.container -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                    <label class="lbl" for="ace-settings-add-container">
                        Inside
                        <b>.container</b>
                    </label>
                </div>

                <!-- /section:settings.container -->
            </div><!-- /.pull-left -->

            <div class="pull-left width-50">
                <!-- #section:basics/sidebar.options -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                </div>

                <!-- /section:basics/sidebar.options -->
            </div><!-- /.pull-left -->
        </div><!-- /.ace-settings-box -->
    </div><!-- /.ace-settings-container -->

    <div class="row">
        <div class="col-xs-12">


            <div class="row">

                <div class="space-6"></div>

                <div class="col-sm-12 infobox-container">
                    <div class="infobox infobox-pink">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-users"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">{{ $member }}</span>
                            <div class="infobox-content">Total Member</div>
                        </div>
                       
                    </div>

                    <div class="infobox infobox-red">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-users"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">{{ $executive }}</span>
                            <div class="infobox-content">Total Executive</div>
                        </div>
                    </div>
                    <div class="infobox infobox-red">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-users"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">{{ $adviser }}</span>
                            <div class="infobox-content">Total Adviser</div>
                        </div>
                    </div>
                    <div class="infobox infobox-red">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-users"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">{{ $general }}</span>
                            <div class="infobox-content">General Member </div>
                        </div>
                    </div>
                    <div class="infobox infobox-red">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-users"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number">{{ $lifetime }}</span>
                            <div class="infobox-content">Lifetime Member</div>
                        </div>
                    </div>



                   
                    <!-- /section:pages/dashboard.infobox -->
                    <div class="space-6"></div>

                    <!-- #section:pages/dashboard.infobox.dark -->
                    <div class="infobox infobox-green infobox-small infobox-dark">
                        <div class="infobox-progress">
                            <!-- #section:pages/dashboard.infobox.easypiechart -->
                            <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                <span class="percent">61</span>%
                            </div>

                            <!-- /section:pages/dashboard.infobox.easypiechart -->
                        </div>

                        <div class="infobox-data">
                            <div class="infobox-content">This</div>
                            <div class="infobox-content">Week</div>
                        </div>
                    </div>

                    <div class="infobox infobox-blue infobox-small infobox-dark">
                        <!-- #section:pages/dashboard.infobox.sparkline -->
                        <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                <span class="percent">50</span>%
                            </div>

                        <!-- /section:pages/dashboard.infobox.sparkline -->
                        <div class="infobox-data">
                            <div class="infobox-content">This</div>
                            <div class="infobox-content">Month</div>
                        </div>
                    </div>

                    <div class="infobox infobox-grey infobox-small infobox-dark">
                    <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                <span class="percent">80</span>%
                            </div>

                        <div class="infobox-data">
                            <div class="infobox-content">This</div>
                            <div class="infobox-content">Year</div>
                        </div>
                    </div>

                    <!-- /section:pages/dashboard.infobox.dark -->
                </div>

                <div class="vspace-12-sm"></div>


            </div><!-- /.row -->

            <!-- #section:custom/extra.hr -->
            <div class="hr hr32 hr-dotted"></div>

            <!-- /section:custom/extra.hr -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="widget-box transparent">
                        <div class="widget-header widget-header-flat">
                            <h4 class="widget-title lighter">
                                <i class="ace-icon fa fa-user orange"></i>
                                Recently Member Join
                            </h4>

                            <div class="widget-toolbar">
                                <a href="#" data-action="collapse">
                                    <i class="ace-icon fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <table class="table table-bordered table-striped">
                                    <thead class="thin-border-bottom">
                                        <tr>
                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Image
                                            </th>

                                            <th>
                                                <i class="ace-icon fa fa-caret-right blue"></i>Name
                                            </th>

                                            <th class="hidden-480">
                                                <i class="ace-icon fa fa-caret-right blue"></i>E-mail
                                            </th>
                                            <th class="hidden-480">
                                                <i class="ace-icon fa fa-caret-right blue"></i>Phone
                                            </th>
                                            <th class="hidden-480">
                                                <i class="ace-icon fa fa-caret-right blue"></i>Designation
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($memberList as $key => $value)
                                        <tr>
                                            <td><img src="{{ asset('uplodas/member/',$value->image) }}" height="50px" width="50px" class="img-thumbnail"/></td>

                                            <td>
                                               {{ $value->full_name }}
                                            </td>

                                            <td class="hidden-480">
                                               {{ $value->email}}
                                            </td>
                                            <td class="hidden-480">
                                               {{ $value->phone}}
                                            </td>
                                            <td class="hidden-480">
                                               {{ $value->designation}}
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                    </tbody>
                                </table>
                            </div><!-- /.widget-main -->
                        </div><!-- /.widget-body -->
                    </div><!-- /.widget-box -->
                </div><!-- /.col -->


            </div><!-- /.row -->

            <div class="hr hr32 hr-dotted"></div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="widget-box transparent" id="recent-box">
                        <div class="widget-header">
                            <h4 class="widget-title lighter smaller">
                                <i class="ace-icon fa fa-rss orange"></i>RECENT Activity
                            </h4>

                            <div class="widget-toolbar no-border">
                                <ul class="nav nav-tabs" id="recent-tab">
                                    <li class="active">
                                        <a data-toggle="tab" href="#task-tab">Contact Request</a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#member-tab">Update</a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#comment-tab">Notice</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main padding-4">
                                <div class="tab-content padding-8">
                                    <div id="task-tab" class="tab-pane active">
                                        <h4 class="smaller lighter green">
                                            <i class="ace-icon fa fa-list"></i>
                                            Sortable Lists
                                        </h4>

                                        <!-- #section:pages/dashboard.tasks -->
                                        <ul id="tasks" class="item-list">
                                            <li class="item-orange clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Answering customer questions</span>
                                                </label>

                                                <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                                                    <span class="percent">42</span>%
                                                </div>
                                            </li>

                                            <li class="item-red clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Fixing bugs</span>
                                                </label>

                                                <!-- #section:custom/extra.action-buttons -->
                                                <div class="pull-right action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>

                                                    <span class="vbar"></span>

                                                    <a href="#" class="red">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>

                                                    <span class="vbar"></span>

                                                    <a href="#" class="green">
                                                        <i class="ace-icon fa fa-flag bigger-130"></i>
                                                    </a>
                                                </div>

                                                <!-- /section:custom/extra.action-buttons -->
                                            </li>

                                            <li class="item-default clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Adding new features</span>
                                                </label>

                                                <!-- #section:elements.dropdown.hover -->
                                                <div class="pull-right pos-rel dropdown-hover">
                                                    <button class="btn btn-minier bigger btn-primary">
                                                        <i class="ace-icon fa fa-cog icon-only bigger-120"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
                                                        <li>
                                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done">
                                                                <span class="green">
                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                <span class="red">
                                                                    <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- /section:elements.dropdown.hover -->
                                            </li>

                                            <li class="item-blue clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Upgrading scripts used in template</span>
                                                </label>
                                            </li>

                                            <li class="item-grey clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Adding new skins</span>
                                                </label>
                                            </li>

                                            <li class="item-green clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Updating server software up</span>
                                                </label>
                                            </li>

                                            <li class="item-pink clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Cleaning up</span>
                                                </label>
                                            </li>
                                        </ul>

                                        <!-- /section:pages/dashboard.tasks -->
                                    </div>

                                    <div id="member-tab" class="tab-pane">
                                        <!-- #section:pages/dashboard.members -->
                                        <div class="clearfix">
                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Bob Doe's avatar" src="../assets/avatars/user.jpg" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Bob Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">20 min</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-warning label-sm">pending</span>

                                                        <div class="inline position-relative">
                                                            <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                        <span class="orange">
                                                                            <i class="ace-icon fa fa-times bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Joe Doe's avatar" src="../assets/avatars/avatar2.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Joe Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">1 hour</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-warning label-sm">pending</span>

                                                        <div class="inline position-relative">
                                                            <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                        <span class="orange">
                                                                            <i class="ace-icon fa fa-times bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Jim Doe's avatar" src="../assets/avatars/avatar.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Jim Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">2 hour</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-warning label-sm">pending</span>

                                                        <div class="inline position-relative">
                                                            <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                        <span class="orange">
                                                                            <i class="ace-icon fa fa-times bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Alex Doe's avatar" src="../assets/avatars/avatar5.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Alex Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">3 hour</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-danger label-sm">blocked</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Bob Doe's avatar" src="../assets/avatars/avatar2.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Bob Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">6 hour</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Susan's avatar" src="../assets/avatars/avatar3.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Susan</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">yesterday</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Phil Doe's avatar" src="../assets/avatars/avatar4.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Phil Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">2 days ago</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv memberdiv">
                                                <div class="user">
                                                    <img alt="Alexa Doe's avatar" src="../assets/avatars/avatar1.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Alexa Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">3 days ago</span>
                                                    </div>

                                                    <div>
                                                        <span class="label label-success label-sm arrowed-in">approved</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space-4"></div>

                                        <div class="center">
                                            <i class="ace-icon fa fa-users fa-2x green middle"></i>

                                            &nbsp;
                                            <a href="#" class="btn btn-sm btn-white btn-info">
                                                See all members &nbsp;
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>

                                        <div class="hr hr-double hr8"></div>

                                        <!-- /section:pages/dashboard.members -->
                                    </div><!-- /.#member-tab -->

                                    <div id="comment-tab" class="tab-pane">
                                        <!-- #section:pages/dashboard.comments -->
                                        <div class="comments">
                                            <div class="itemdiv commentdiv">
                                                <div class="user">
                                                    <img alt="Bob Doe's Avatar" src="../assets/avatars/avatar.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Bob Doe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">6 min</span>
                                                    </div>

                                                    <div class="text">
                                                        <i class="ace-icon fa fa-quote-left"></i>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                        commodo massa sed ipsum porttitor facilisis &hellip;
                                                    </div>
                                                </div>

                                                <div class="tools">
                                                    <div class="inline position-relative">
                                                        <button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                            <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                    <span class="green">
                                                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                    <span class="orange">
                                                                        <i class="ace-icon fa fa-times bigger-110"></i>
                                                                    </span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                    <span class="red">
                                                                        <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv commentdiv">
                                                <div class="user">
                                                    <img alt="Jennifer's Avatar" src="../assets/avatars/avatar1.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Jennifer</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="blue">15 min</span>
                                                    </div>

                                                    <div class="text">
                                                        <i class="ace-icon fa fa-quote-left"></i>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                        commodo massa sed ipsum porttitor facilisis &hellip;
                                                    </div>
                                                </div>

                                                <div class="tools">
                                                    <div class="action-buttons bigger-125">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-pencil blue"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-trash-o red"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv commentdiv">
                                                <div class="user">
                                                    <img alt="Joe's Avatar" src="../assets/avatars/avatar2.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Joe</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="orange">22 min</span>
                                                    </div>

                                                    <div class="text">
                                                        <i class="ace-icon fa fa-quote-left"></i>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                        commodo massa sed ipsum porttitor facilisis &hellip;
                                                    </div>
                                                </div>

                                                <div class="tools">
                                                    <div class="action-buttons bigger-125">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-pencil blue"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-trash-o red"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv commentdiv">
                                                <div class="user">
                                                    <img alt="Rita's Avatar" src="../assets/avatars/avatar3.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="name">
                                                        <a href="#">Rita</a>
                                                    </div>

                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="red">50 min</span>
                                                    </div>

                                                    <div class="text">
                                                        <i class="ace-icon fa fa-quote-left"></i>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                        commodo massa sed ipsum porttitor facilisis &hellip;
                                                    </div>
                                                </div>

                                                <div class="tools">
                                                    <div class="action-buttons bigger-125">
                                                        <a href="#">
                                                            <i class="ace-icon fa fa-pencil blue"></i>
                                                        </a>

                                                        <a href="#">
                                                            <i class="ace-icon fa fa-trash-o red"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="hr hr8"></div>

                                        <div class="center">
                                            <i class="ace-icon fa fa-comments-o fa-2x green middle"></i>

                                            &nbsp;
                                            <a href="#" class="btn btn-sm btn-white btn-info">
                                                See all comments &nbsp;
                                                <i class="ace-icon fa fa-arrow-right"></i>
                                            </a>
                                        </div>

                                        <div class="hr hr-double hr8"></div>

                                        <!-- /section:pages/dashboard.comments -->
                                    </div>
                                </div>
                            </div><!-- /.widget-main -->
                        </div><!-- /.widget-body -->
                    </div><!-- /.widget-box -->
                </div><!-- /.col -->


            </div><!-- /.row -->

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->

@endsection