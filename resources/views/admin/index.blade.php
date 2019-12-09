@extends('admin/layout')
@section('title')
    Anasayfa
    @stop





@section('content')
    <div class="row margin-top-10">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">7800<small class="font-green-sharp">$</small></h3>
                        <small>TOTAL PROFIT</small>
                    </div>
                    <div class="icon">
                        <i class="icon-pie-chart"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
								<span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
								<span class="sr-only">76% progress</span>
								</span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            progress
                        </div>
                        <div class="status-number">
                            76%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red-haze">1349</h3>
                        <small>NEW FEEDBACKS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-like"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
								<span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
								<span class="sr-only">85% change</span>
								</span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            change
                        </div>
                        <div class="status-number">
                            85%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-sharp">567</h3>
                        <small>NEW ORDERS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-basket"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
								<span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
								<span class="sr-only">45% grow</span>
								</span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            grow
                        </div>
                        <div class="status-number">
                            45%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-purple-soft">276</h3>
                        <small>NEW USERS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-user"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
								<span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
								<span class="sr-only">56% change</span>
								</span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            change
                        </div>
                        <div class="status-number">
                            57%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-sm-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i>Table
                    </div>
                    <div class="actions">
                        <a href="javascript:;" class="btn btn-default btn-sm">
                            <i class="fa fa-pencil"></i> Add </a>
                        <div class="btn-group">
                            <a class="btn btn-default btn-sm" href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-cogs"></i> Tools <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-pencil"></i> Edit </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-ban"></i> Ban </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="i"></i> Make admin </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th class="table-checkbox">
                                <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
                            </th>
                            <th>
                                Username
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                shuxer
                            </td>
                            <td>
                                <a href="mailto:shuxer@gmail.com">
                                    shuxer@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                looper
                            </td>
                            <td>
                                <a href="mailto:looper90@gmail.com">
                                    looper90@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-warning">
									Suspended </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                userwow
                            </td>
                            <td>
                                <a href="mailto:userwow@yahoo.com">
                                    userwow@yahoo.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                user1wow
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    userwow@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-default">
									Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                restest
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    test@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                foopl
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                weep
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                coop
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                pppol
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                test
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                userwow
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    userwow@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-default">
									Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                test
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    test@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
        <div class="col-md-6 col-sm-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Table
                    </div>
                    <div class="actions">
                        <a href="javascript:;" class="btn btn-default btn-sm">
                            <i class="fa fa-plus"></i> Add </a>
                        <a href="javascript:;" class="btn btn-default btn-sm">
                            <i class="fa fa-print"></i> Print </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_3">
                        <thead>
                        <tr>
                            <th class="table-checkbox">
                                <input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes"/>
                            </th>
                            <th>
                                Username
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                shuxer
                            </td>
                            <td>
                                <a href="mailto:shuxer@gmail.com">
                                    shuxer@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                looper
                            </td>
                            <td>
                                <a href="mailto:looper90@gmail.com">
                                    looper90@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-warning">
									Suspended </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                userwow
                            </td>
                            <td>
                                <a href="mailto:userwow@yahoo.com">
                                    userwow@yahoo.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                user1wow
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    userwow@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-default">
									Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                restest
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    test@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                foopl
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                weep
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                coop
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                pppol
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                test
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    good@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                userwow
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    userwow@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-default">
									Blocked </span>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>
                                <input type="checkbox" class="checkboxes" value="1"/>
                            </td>
                            <td>
                                test
                            </td>
                            <td>
                                <a href="mailto:userwow@gmail.com">
                                    test@gmail.com </a>
                            </td>
                            <td>
									<span class="label label-sm label-success">
									Approved </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    @stop






@section('header')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    @stop


@section('js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
    <!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->

    <script src="{{asset('assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/layout4/scripts/layout.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/layout4/scripts/demo.js')}}" type="text/javascript"></script>

    <script src="{{asset('assets/admin/pages/scripts/tasks.js')}}" type="text/javascript"></script>



    <script src="{{asset('assets/admin/pages/scripts/table-managed.js')}}"></script>


    <script type="text/javascript" src="{{asset('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function () {
            Metronic.init(); // init metronic core componets
            Layout.init(); // init layout
            Demo.init(); // init demo features

            Tasks.initDashboardWidget(); // init tash dashboard widget
            TableManaged.init();
        });
    </script>



    @endsection
