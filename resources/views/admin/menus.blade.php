@extends('admin/layout')
@section('title')
    Menüler
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
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h3 id="product_name">Şirket Adı</h3>
                </div>
                <div class="panel-body">

                    <div class="content-group">
                        <select multiple="multiple" class="form-control listbox-dynamic-options">
                            @foreach($item_categories as $item)
                                <option class="select-item"
                                        value="option{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <br>
                            <label>Yeni Kategori Ekle</label>
                            <div class="input-group">
                                <input type="text" name="category" id="category" class="form-control"
                                       placeholder="Yeni Kategori">
                                <span class="input-group-btn">
													<button id="category_add" class="btn bg-teal"
                                                            type="button">Ekle</button>
												</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <br>
                            <label>Yeni Eleman Ekle</label>
                            <div class="form-group">
                                <input type="text" name="item_name" id="item_name" class="form-control"
                                       placeholder="Malzeme Adı">
                                <input type="text" name="item_description" id="item_description" class="form-control"
                                       placeholder="Malzeme Açıklama">
                                <input type="text" name="item_featured_image" id="item_featured_image"
                                       class="form-control"
                                       placeholder="Malzeme Fotoğrafı">
                                <input type="text" name="item_price" id="item_price" class="form-control"
                                       placeholder="Malzeme Fiyatı">
                                <br>
                                <button id="item_add" class="btn bg-teal "
                                        type="button">Ekle
                                </button>
                                <button id="item_update" class="btn bg-teal "
                                        type="button">Düzenle
                                </button>
                                <button id="item_delete" class="btn bg-teal "
                                        type="button">Sil
                                </button>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        @endsection



        @section('js')

            <script type="text/javascript" src="assets/js/duallistbox.min.js"></script>


            <script src="{{asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/admin/layout4/scripts/layout.js')}}" type="text/javascript"></script>
            <script src="{{asset('assets/admin/layout4/scripts/demo.js')}}" type="text/javascript"></script>

            <script>
                $('.listbox-dynamic-options').bootstrapDualListbox({
                    moveOnSelect: false,
                    showFilterInputs: false,
                    infoTextEmpty: false,
                    infoText: false,
                    moveSelectedLabel: false,

                });
                $('.bootstrap-duallistbox-container .btn-group.buttons').remove();
                $('.bootstrap-duallistbox-container .info-container').remove();


                function refreshtable() {
                    $.ajax({
                        url: '{{route('admin.menu.category.get')}}',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            id: clicked.value.replace('option', ''),
                            product_id: product_id
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            $.each($(".listbox-dynamic-options option:selected"), function () {
                                $(this).remove();
                            });

                            var a = 0;

                            $.each($(data), function (i, item) {
                                a = 1;
                                $('.listbox-dynamic-options').append('<option class="category_item" value="' + item.id + '" selected="selected">' + item.name + ' </option>');
                            });
                            if (a == 0) {
                                $('.listbox-dynamic-options').bootstrapDualListbox('refresh', false);
                            }
                            $('.listbox-dynamic-options').bootstrapDualListbox('refresh');

                            $('#supplies').val('');
                            $('#category').val('');
                        }
                    });
                }

                var clicked;


                $('.select-item').click(function () {
                    clicked = $(this)[0];
                    refreshtable();
                });
var clicked2;
                $(document).on('click', '.category_item', function () {
                     clicked2 = $(this)[0];

                    $.ajax({
                        url: '{{route('admin.menu.item.get')}}',
                        type: 'POST',
                        data: {
                            id: clicked2.value,
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {

                            $("#item_name").val(data.name);
                            $("#item_description").val(data.description);
                            $("#item_featured_image").val(data.featured_image);
                            $("#item_price").val(data.price);
                            noty({
                                width: 200,
                                text: 'Malzeme Detayları Getirildi !',
                                type: 'success',
                                dismissQueue: true,
                                timeout: 3000,
                                layout: 'bottomRight',

                            });
                        }
                    });
                });
                $("#item_add").click(function () {
                    $.ajax({
                        url: '{{route('admin.menu.item.add')}}',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            name: $("#item_name").val(),
                            description: $("#item_description").val(),
                            featured_image: $("#item_featured_image").val(),
                            price: $("#item_price").val(),
                            category_id:clicked.value.replace('option', ''),
                            product_id:product_id
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if (data == 200) {
                                noty({
                                    width: 200,
                                    text: 'Ekleme Yapıldı !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 1000,
                                    layout: 'bottomRight',

                                });
                                refreshtable();

                            } else {
                                noty({
                                    width: 200,
                                    text: 'Ekleme Yapılamadı !',
                                    type: 'error',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });
                            }
                        }
                    });

                });
                $("#item_update").click(function () {
                    $.ajax({
                        url: '{{route('admin.menu.item.update')}}',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            id:clicked2.value,
                            name: $("#item_name").val(),
                            description: $("#item_description").val(),
                            featured_image: $("#item_featured_image").val(),
                            price: $("#item_price").val(),
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if (data == 200) {
                                noty({
                                    width: 200,
                                    text: 'Düzenleme Yapıldı !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 1000,
                                    layout: 'bottomRight',

                                });

                                refreshtable();
                            } else {
                                noty({
                                    width: 200,
                                    text: 'Düzenleme Yapılamadı !',
                                    type: 'error',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });
                            }
                        }
                    });

                });
                $("#item_delete").click(function () {
                    $.ajax({
                        url: '{{route('admin.menu.item.delete')}}',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            id:clicked2.value,

                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if (data == 200) {
                                noty({
                                    width: 200,
                                    text: 'Silme İşlemi Yapıldı !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 1000,
                                    layout: 'bottomRight',

                                });
refreshtable();

                            } else {
                                noty({
                                    width: 200,
                                    text: 'Silme İşlemi Yapılamadı !',
                                    type: 'error',
                                    dismissQueue: true,
                                    timeout: 3000,
                                    layout: 'bottomRight',

                                });
                            }
                        }
                    });

                });
                $("#category_add").click(function () {
                    $.ajax({
                        url: '{{route('admin.menu.category.add')}}',
                        type: 'POST',
                        /* send the csrf-token and the input to the controller */
                        data: {
                            name: $('#category').val()
                        },
                        dataType: 'JSON',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        /* remind that 'data' is the response of the AjaxController */
                        success: function (data) {
                            if (data == 200) {
                                noty({
                                    width: 200,
                                    text: 'Ekleme Yapıldı !',
                                    type: 'success',
                                    dismissQueue: true,
                                    timeout: 1000,
                                    layout: 'bottomRight',

                                });
                                window.location.reload();

                            } else {
                                noty({
                                    width: 200,
                                    text: 'Ekleme Yapılamadı !',
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


            <script type="text/javascript" src="{{asset('assets/js/noty.min.js')}}"></script>
            <!-- END PAGE LEVEL SCS -->
            <script>
                jQuery(document).ready(function () {
                    Metronic.init(); // init metronic core components
                    Layout.init(); // init current layout
                    Demo.init(); // init demo features

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

                            $("#product_name").text(data.name);

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


            </script>
        @endsection

        @section('header')
            <style>

                .bootstrap-duallistbox-container .box1 {
                    margin-bottom: 20px;
                }

                .bootstrap-duallistbox-container select.form-control {
                    padding: 7px;
                    border-top-right-radius: 0;
                    border-top-left-radius: 0;
                }

                .bootstrap-duallistbox-container option {
                    display: block;
                    padding: 7px 12px;
                    border-radius: 2px;
                }

                .bootstrap-duallistbox-container.moveonselect .move,
                .bootstrap-duallistbox-container.moveonselect .remove {
                    display: none;
                }

                .bootstrap-duallistbox-container.moveonselect .moveall,
                .bootstrap-duallistbox-container.moveonselect .removeall {
                    width: 100%;
                    border-top-right-radius: 3px !important;
                    border-top-left-radius: 3px !important;
                }

                .bootstrap-duallistbox-container.moveonselect .btn-group .btn + .btn {
                    border-left-width: 1px;
                }

                .bootstrap-duallistbox-container .buttons {
                    width: 100%;
                    margin-bottom: -1px;
                }

                .bootstrap-duallistbox-container .clear1,
                .bootstrap-duallistbox-container .clear2 {
                    display: none;
                    margin-top: 20px;
                }

                .bootstrap-duallistbox-container .clear1,
                .bootstrap-duallistbox-container .clear2,
                .bootstrap-duallistbox-container .clear1:hover,
                .bootstrap-duallistbox-container .clear2:hover,
                .bootstrap-duallistbox-container .clear1:focus,
                .bootstrap-duallistbox-container .clear2:focus {
                    background-color: transparent;
                    border: 0;
                    color: #1E88E5;
                    padding: 0;
                    -webkit-box-shadow: none;
                    box-shadow: none;
                }

                .bootstrap-duallistbox-container .box1.filtered .clear1,
                .bootstrap-duallistbox-container .box2.filtered .clear2 {
                    display: inline-block;
                }

                .bootstrap-duallistbox-container .move,
                .bootstrap-duallistbox-container .remove,
                .bootstrap-duallistbox-container .moveall,
                .bootstrap-duallistbox-container .removeall {
                    width: 50%;
                }

                .bootstrap-duallistbox-container .btn-group .btn {
                    margin: 0;
                    border-bottom-right-radius: 0;
                    border-bottom-left-radius: 0;
                }

                .bootstrap-duallistbox-container .btn-group .btn + .btn {
                    border-left-width: 0;
                }

                .bootstrap-duallistbox-container .btn-group .btn > i {
                    float: none;
                    text-align: center;
                }

                .bootstrap-duallistbox-container .btn-group .btn > i + i {
                    margin-left: -14px;
                }

                .bootstrap-duallistbox-container .filter {
                    margin-bottom: 20px;
                    position: relative;
                }

                .bootstrap-duallistbox-container .filter.placeholder {
                    color: #999;
                }

                .bootstrap-duallistbox-container .info-container .info {
                    display: inline-block;
                    margin-top: 20px;
                }

                .bootstrap-duallistbox-container .info-container .info .label {
                    margin-right: 7px;
                }

                .sidebar .bootstrap-duallistbox-container {
                    text-align: center;
                }

                .sidebar .bootstrap-duallistbox-container .box1,
                .sidebar .bootstrap-duallistbox-container .box2 {
                    float: none;
                    width: 100%;
                }

                .sidebar .bootstrap-duallistbox-container .box1 {
                    padding-bottom: 5px;
                }

                .sidebar .bootstrap-duallistbox-container .box1:after {
                    content: '\e9c9';
                    font-size: 16px;
                    font-family: 'icomoon';
                    display: block;
                    text-align: center;
                    line-height: 1;
                    margin: 10px 0;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                    opacity: 0.5;
                    filter: alpha(opacity=50);
                }

                @media (min-width: 1025px) {
                    .bootstrap-duallistbox-container .box1 {
                        margin-bottom: 0;
                    }

                    .sidebar .bootstrap-duallistbox-container .box1 {
                        margin-bottom: 0;
                    }
                }

                /* ------------------------------------------------------------------------------
                 *
</style>

            <link rel="stylesheet" type="text/css"
                  href="{{asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}"/>
            <link rel="stylesheet" type="text/css"
                  href="{{asset('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}">
            <link rel="stylesheet" type="text/css"
                  href="{{asset('assets/global/plugins/bootstrap-summernote/summernote.css')}}">
@endsection
