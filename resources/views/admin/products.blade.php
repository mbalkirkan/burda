@extends('admin/layout')
@section('title')
    Şirketler
@stop

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-9">
            <!-- BEGIN PORTLET-->
            <div class="portlet light">
                <div class="portlet-body">
                    <!--BEGIN TABS-->
                    <div class="scroller" style="height: 600px;" data-always-visible="1" data-rail-visible1="0"
                         data-handle-color="#D7DCE2">
                        <ul class="feeds">
                            @foreach($products as $item)
                                <li>
                                    <a href="#" onclick="getproduct({{$item->id}})">
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-space-shuttle"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        {{$item->name}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--END TABS-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
        <div class="col-md-9">
            <form class="form-horizontal form-row-seperated" action="#">
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-basket font-green-sharp"></i>
                            <span class="caption-subject font-green-sharp bold uppercase">
									Şirketi Düzenle </span>

                        </div>

                    </div>
                    <div class="portlet-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Adı: <span class="required">
													* </span>
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="product[name]"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Açıklama: <span class="required">
													* </span>
                                </label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="product[description]"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Uzun Açıklama:
                                </label>
                                <div class="col-md-10">
                                    <!-- BEGIN EXTRAS PORTLET-->
                                    <div class="portlet box blue-hoki">

                                        <div class="portlet-body form">
                                            <form class="form-horizontal form-bordered">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-11">
                                                            <div name="summernote" id="summernote_1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Kategori: <span class="required">
													* </span>
                                </label>
                                <div class="col-md-10">
                                    <select class="table-group-action-input form-control input-medium"
                                            name="product[status]">
                                        <option value="">Seçiniz...</option>
                                        @foreach($product_category as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Öne çıkan görsel : <span class="required">
													* </span>
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="product[sku]"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Fotoğraflar: <span class="required">
													* </span>
                                </label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="product[description]"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Telefon : <span class="required">
													* </span>
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="product[sku]"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Adres : <span class="required">
													* </span>
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="product[sku]"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Google maps adres : <span class="required">
													* </span>
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="product[sku]"
                                           placeholder="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')

    <script type="text/javascript" src="{{asset('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"
            type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js')}}"
            type="text/javascript"></script>
    <script type="text/javascript"
            src="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('assets/global/plugins/plupload/js/plupload.full.min.js')}}" type="text/javascript"></script>


    <script src="{{asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/layout4/scripts/layout.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/admin/layout4/scripts/demo.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/scripts/datatable.js')}}"></script>
    <script src="{{asset('assets/admin/pages/scripts/ecommerce-products-edit.js')}}"></script>




    <script type="text/javascript" src="{{asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/bootstrap-summernote/summernote.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <script src="{{asset('assets\global\plugins\bootstrap-summernote\lang\summernote-tr-TR.js')}}"></script>
    <script src="{{asset('assets/admin/pages/scripts/components-editors.js')}}"></script>

    <!-- END PAGE LEVEL SCS -->
    <script>
        jQuery(document).ready(function () {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Demo.init(); // init demo features
            EcommerceProductsEdit.init();
            ComponentsEditors.init();
        });
    </script>
    <script>
        function getproduct(id) {
            alert(id);
        }
    </script>
@endsection

@section('header')


    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/bootstrap-summernote/summernote.css')}}">
    @endsection
