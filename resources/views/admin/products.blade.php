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

            <div class="portlet box blue-hoki">

                <form class="form-horizontal form-row-seperated" action="#">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-basket font-green-sharp"></i>
                                <span class="caption-subject font-green-sharp bold uppercase">
									Şirketi Düzenle </span>

                            </div>
                            <div class="tools">
                                <div class="clearfix">
                                    <a href="javascript:;" id="delete" class="btn btn-xs blue">
                                        <i class="fa fa-trash-o"></i> Sil </a>
                                    <a href="javascript:;" id="save" class="btn btn-xs green">
                                        Yeni Şirket Ekle <i class="fa fa-plus"></i>
                                    </a>
                                    <a href="javascript:;" id="update" class="btn btn-xs red">
                                        Güncelle <i class="fa fa-edit"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Adı: <span class="required">
													* </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="product_name" id="product_name"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Açıklama: <span class="required">
													* </span>
                                    </label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="product_description"
                                                  id="product_description"></textarea>
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
                                                name="product_category" id="product_category">
                                            <option value="">Seçiniz...</option>
                                            @foreach($product_category as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Öne çıkan görsel (600x550) : <span class="required">
													* </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="product_featured_image"
                                               id="product_featured_image"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Fotoğraflar (800x600) : <span class="required">
													* </span>
                                    </label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="product_photos"
                                                  id="product_photos"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Telefon : <span class="required">
													* </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="product_phone" id="product_phone"
                                               placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Adres : <span class="required">
													* </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="product_address"
                                               id="product_address"
                                               placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Google maps adres : <span class="required">
													* </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="product_maps_address"
                                               id="product_maps_address"
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
            <script src="{{asset('assets/global/plugins/plupload/js/plupload.full.min.js')}}"
                    type="text/javascript"></script>


            <script src="{{asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/admin/layout4/scripts/layout.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/admin/layout4/scripts/demo.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/global/scripts/datatable.js')}}"></script>
            <script src="{{asset('assets/admin/pages/scripts/ecommerce-products-edit.js')}}"></script>




            <script type="text/javascript"
                    src="{{asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
            <script type="text/javascript"
                    src="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}"
                    type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}"
                    type="text/javascript"></script>
            <script src="{{asset('assets/global/plugins/bootstrap-summernote/summernote.min.js')}}"
                    type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->

            <script src="{{asset('assets\global\plugins\bootstrap-summernote\lang\summernote-tr-TR.js')}}"></script>
            <script src="{{asset('assets/admin/pages/scripts/components-editors.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/js/noty.min.js')}}"></script>
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
                var product_id = 0;

                function getproduct(id) {
                    product_id = id;
                    $.ajax({
                        url: '{{route('admin.products.get')}}',
                        type: 'POST',
                        data: {
                            id: id,
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {

                            $("#product_name").val(data.name);
                            $("#product_description").val(data.description);
                            $("#summernote_1").val(data.explanation);
                            $("#product_category").val(data.product_category_id);
                            $("#product_featured_image").val(data.featured_image);
                            $("#product_photos").val(data.photos);
                            $("#product_phone").val(data.phone);
                            $("#product_address").val(data.address);
                            $("#product_maps_address").val(data.googlemaps_address);
                            noty({
                                width: 200,
                                text: 'Şirket Detayları Getirildi !',
                                type: 'success',
                                dismissQueue: true,
                                timeout: 3000,
                                layout: 'bottomRight',

                            });
                        }
                    });
                }
                $("#delete").click(function () {
                    $.ajax({
                        url: '{{route('admin.products.delete')}}',
                        type: 'POST',
                        data: {
                            product_id: product_id,

                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if(data==200)
                            {
                                noty({
                                    width: 200,
                                    text: 'Şirket Silindi !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',
                                });
                                $("#product_name").val('');
                                $("#product_description").val('');
                                $("#summernote_1").val('');
                                $("#product_category").val(0);
                                $("#product_featured_image").val('');
                                $("#product_photos").val('');
                                $("#product_phone").val('');
                                $("#product_address").val('');
                                $("#product_maps_address").val('');
                            }
                            else{

                                noty({
                                    width: 200,
                                    text: 'Şirket Silinemedi !',
                                    type: 'error',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });

                            }
                        }
                    });
                });


                $("#update").click(function () {
                    $.ajax({
                        url: '{{route('admin.products.update')}}',
                        type: 'POST',
                        data: {
                            product_id: product_id,
                            product_name: $("#product_name").val(),
                            product_description: $("#product_description").val(),
                            explanation: $("#summernote_1").code(),
                            product_category: $("#product_category").val(),
                            product_featured_image: $("#product_featured_image").val(),
                            product_photos: $("#product_photos").val(),
                            product_phone: $("#product_phone").val(),
                            product_address: $("#product_address").val(),
                            product_maps_address: $("#product_maps_address").val(),
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if(data==200)
                            {
                                noty({
                                    width: 200,
                                    text: 'Şirket Güncellendi !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });
                            }
else{

                                    noty({
                                        width: 200,
                                        text: 'Şirket Güncellenemedi !',
                                        type: 'error',
                                        dismissQueue: true,
                                        timeout: 3000,
                                        layout: 'bottomRight',

                                    });

                            }
                        }
                    });
                });


                $("#save").click(function () {
                    $.ajax({
                        url: '{{route('admin.products.save')}}',
                        type: 'POST',
                        data: {
                            product_name: $("#product_name").val(),
                            product_description: $("#product_description").val(),
                            explanation: $("#summernote_1").code(),
                            product_category: $("#product_category").val(),
                            product_featured_image: $("#product_featured_image").val(),
                            product_photos: $("#product_photos").val(),
                            product_phone: $("#product_phone").val(),
                            product_address: $("#product_address").val(),
                            product_maps_address: $("#product_maps_address").val(),
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if(data==200)
                            {
                                noty({
                                    width: 200,
                                    text: 'Şirket Eklendi !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',
                                });


                            }
                            else{

                                noty({
                                    width: 200,
                                    text: 'Şirket Eklenemedi !',
                                    type: 'error',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });

                            }
                        }
                    });
                });
            </script>
        @endsection

        @section('header')


            <link rel="stylesheet" type="text/css"
                  href="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}"/>
            <link rel="stylesheet" type="text/css"
                  href="{{asset('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}">
            <link rel="stylesheet" type="text/css"
                  href="{{asset('assets/global/plugins/bootstrap-summernote/summernote.css')}}">
@endsection
