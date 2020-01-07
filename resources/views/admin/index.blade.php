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
                        <h3 class="font-green-sharp">{{$product_count}}</h3>
                        <small>Şirket</small>
                    </div>
                    <div class="icon">
                        <i class="icon-pie-chart"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
								<span style="width: {{$product_count}}%;"
                                      class="progress-bar progress-bar-success green-sharp">
								<span class="sr-only">{{$product_count}}% ilerleme</span>
								</span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            ilerleme (100)
                        </div>
                        <div class="status-number">
                            {{$product_count}}%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red-haze">{{$comment_count}}</h3>
                        <small>Yorum</small>
                    </div>
                    <div class="icon">
                        <i class="icon-like"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
								<span style="width: {{$comment_count/10}}%;"
                                      class="progress-bar progress-bar-success red-haze">
								<span class="sr-only">{{$comment_count/10}}% ilerleme</span>
								</span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            ilerleme (1000)
                        </div>
                        <div class="status-number">
                            {{$comment_count/10}}%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-sharp">{{$category_count}}</h3>
                        <small>Kategori</small>
                    </div>
                    <div class="icon">
                        <i class="icon-basket"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
								<span style="width: {{$category_count}}%;"
                                      class="progress-bar progress-bar-success blue-sharp">
								<span class="sr-only">{{$category_count}}% ilerleme</span>
								</span>
                    </div>
                    <div class="status">
                        <div class="status-title">
                            ilerleme (100)
                        </div>
                        <div class="status-number">
                            {{$category_count}}%
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
                        <i class="fa fa-user"></i>Yorumlar
                    </div>
                    <div class="actions">

                        <div class="btn-group">
                            <a class="btn btn-default btn-sm" href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-cogs"></i> İşlem <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">

                                <li>
                                    <a href="javascript:;" id="approve">
                                        <i class="icon-check"></i> Onayla </a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="delete">
                                        <i class="fa fa-ban"></i> Sil </a>
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
                                Firma
                            </th>
                            <th>
                                Ad
                            </th>
                            <th>
                                Yorum
                            </th>
                            <th>
                                Durum
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($comments as $item)
                            <tr class="odd gradeX" id="comment_{{$item->id}}">
                                <td>
                                    <input type="checkbox" id="check_{{$item->id}}" class="checkboxes"
                                           value="{{$item->id}}"/>
                                </td>
                                <td>
                                    {{$item->product_name}}
                                </td>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>
                                    {{$item->comment}} Puan: {{$item->rating}}
                                </td>
                                <td>
                                        <span id="status_{{$item->id}}"   @if($item->visible==0)  class="label label-sm label-default"    @elseif($item->visible==1) class="label label-sm label-success" @endif>
								@if($item->visible==0) Bekliyor   @elseif($item->visible==1) Onaylandı @endif	 </span>

                                </td>
                            </tr>
                        @endforeach


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
                        <i class="fa fa-bullhorn"></i>İlanlar
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <a class="btn btn-default btn-sm" href="javascript:;" data-toggle="dropdown">
                                <i class="fa fa-cogs"></i> İşlem <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">

                                <li>
                                    <a href="javascript:;" id="jobapprove">
                                        <i class="icon-check"></i> Onayla </a>
                                </li>
                                <li>
                                    <a href="javascript:;" id="jobdelete">
                                        <i class="fa fa-ban"></i> Sil </a>
                                </li>

                            </ul>
                        </div>
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
                                Ad
                            </th>
                            <th>
                                Firma Adı
                            </th>
                            <th>
                                Detay
                            </th>
                            <th>
                                Telefon
                            </th>
                            <th>
                                Kategori
                            </th>
                            <th>
                                Çalışma Şekli
                            </th>
                            <th>
                                Durum
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($jobs as $item)
                            <tr class="odd gradeX" id="job_{{$item->id}}">
                                <td>
                                    <input type="checkbox" id="checkj_{{$item->id}}" class="checkboxes"
                                           value="{{$item->id}}"/>
                                </td>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>
                                    {{$item->product_name}}
                                </td>
                                <td>
                                    {{$item->detail}}
                                </td>
                                <td>
                                    {{$item->phone}}
                                </td>
                                <td>
                                    {{$item->category}}
                                </td>
                                <td>
                                    @if($item->operation_type==1) İş Arayan   @elseif($item->operation_type==2) İşveren @endif
                                </td>
                                <td>
                                        <span id="status2_{{$item->id}}"   @if($item->active==0)  class="label label-sm label-default"    @elseif($item->active==1) class="label label-sm label-success" @endif>
								@if($item->active==0) Bekliyor   @elseif($item->active==1) Onaylandı @endif	 </span>

                                </td>
                            </tr>
                            @endforeach

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
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
@stop


@section('js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}"
            type="text/javascript"></script>
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
    <script type="text/javascript"
            src="{{asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/noty.min.js')}}"></script>

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


    <script>
        var de=[
            @foreach($comments as $item)
            {{$item->id}},
            @endforeach
        ];

        var job=[
            @foreach($jobs as $item)
            {{$item->id}},
            @endforeach
        ];

        $("#approve").click(function () {

            for (i = 0; i <=de.length; i++) {
                if ($('#check_' + de[i]).is(':checked')) {
                    $.ajax({
                        url: '{{route('admin.comment.approve')}}',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            id: $('#check_' + de[i]).val(),
                        },
                        async:false,
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if (data == 200) {
                                noty({
                                    width: 200,
                                    text: 'Onay Yapıldı !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });
                                $("#status_"+de[i]).attr('class', 'label label-sm label-success');
                                $("#status_"+de[i]).text('Onaylandı');
                            } else {
                                noty({
                                    width: 200,
                                    text: 'Onay Yapılamadı !',
                                    type: 'error',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',
                                });
                            }
                        }
                    });
                }

            }


        });
        $("#delete").click(function () {
            for (i = 0; i <=de.length; i++) {
                if ($('#check_' + de[i]).is(':checked')) {
                    $.ajax({
                        url: '{{route('admin.comment.delete')}}',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            id: $('#check_' + de[i]).val(),
                        },
                        async:false,
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if (data == 200) {
                                noty({
                                    width: 200,
                                    text: 'Silindi !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });
                                $('#sample_2').DataTable().row($('#comment_'+de[i])).remove().draw();
                              //  sample_2

                            } else {
                                noty({
                                    width: 200,
                                    text: 'Silinemedi !',
                                    type: 'error',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',
                                });
                            }
                        }
                    });
                }

            }


        });



        $("#jobapprove").click(function () {

            for (i = 0; i <=job.length; i++) {
                if ($('#checkj_' + job[i]).is(':checked')) {
                    $.ajax({
                        url: '{{route('admin.job.approve')}}',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            id: $('#checkj_' + job[i]).val(),
                        },
                        async:false,
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if (data == 200) {
                                noty({
                                    width: 200,
                                    text: 'Onay Yapıldı !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });
                                $("#status2_"+job[i]).attr('class', 'label label-sm label-success');
                                $("#status2_"+job[i]).text('Onaylandı');
                            } else {
                                noty({
                                    width: 200,
                                    text: 'Onay Yapılamadı !',
                                    type: 'error',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',
                                });
                            }
                        }
                    });
                }

            }


        });
        $("#jobdelete").click(function () {
            for (i = 0; i <=job.length; i++) {
                if ($('#checkj_' + job[i]).is(':checked')) {
                    $.ajax({
                        url: '{{route('admin.job.delete')}}',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            id: $('#checkj_' + job[i]).val(),
                        },
                        async:false,
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if (data == 200) {
                                noty({
                                    width: 200,
                                    text: 'Silindi !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });
                                $('#sample_3').DataTable().row($('#comment_'+job[i])).remove().draw();
                                //  sample_2

                            } else {
                                noty({
                                    width: 200,
                                    text: 'Silinemedi !',
                                    type: 'error',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',
                                });
                            }
                        }
                    });
                }

            }


        });
    </script>



@endsection
