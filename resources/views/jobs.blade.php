{{--@extends('layout')--}}

{{--@section('title')İş İlanları @stop--}}

{{--@section('meta_description') Uşakta iş ilanları, iş bulabileceğiniz veya iş yayınlayabileceğiniz bir ortam @endsection--}}
{{--@section('meta_keywords') Uşak iş ilanı, uşak iş ilanları, uşak işveren, uşak iş bul, uşak işçi bul, uşak işçi, uşak çalışan, uşak çalışan bul, uşak iş ver, uşak iş @stop--}}

{{--@section('meta_image')@stop--}}


{{--@section('header')--}}

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Admin">
    <meta name="description" content="Uşakta iş ilanları, iş bulabileceğiniz veya iş yayınlayabileceğiniz bir ortam">
    <meta
        content="Uşak iş ilanı, uşak iş ilanları, uşak işveren, uşak iş bul, uşak işçi bul, uşak işçi, uşak çalışan, uşak çalışan bul, uşak iş ver, uşak iş"
        name="keywords">

    <meta name="robots" content="index, follow">
    <meta name="language" content="Turkish">


    <meta property="og:site_name" content="Uşak Burda">
    <meta property="og:title" content="Uşak Burda | @yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('img/logo.png')}}"><!-- link to image for socio -->
    <meta property="og:url" content="{{Request::url()}}">

    <title>Uşak Burda | İş İlanları</title>



    <link rel="stylesheet" href="{{asset('jobs/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('jobs/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('jobs/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('jobs/css/slidr.css')}}">
    <link rel="stylesheet" href="{{asset('jobs/css/main.css')}}">
    <link id="preset" rel="stylesheet" href="{{asset('jobs/css/presets/preset1.css')}}">
    <link rel="stylesheet" href="{{asset('jobs/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('jobs/css/compiled-4.10.1.min.css')}}">

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet'
          type='text/css'>

    <!-- icons -->
    <link rel="icon" href="{{asset('img/fav.ico')}}">

    <!-- icons -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}.well-lg{padding:24px;border-radius:6px}.well-sm{padding:9px;border-radius:3px}
    </style>


</head>
{{--@stop--}}

{{--@section('js')--}}

{{--    @stop--}}
{{--@section('body')--}}

<body>
<!-- header -->
<header id="header" class="clearfix">
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}"><img style="height: 64px" class="img-fluid"
                                                                   src="{{asset('img/logo.png')}}"
                                                                   alt="Uşak Burda"></a>


            <!-- nav-right -->
            <div class="nav-right">
                <a class="btn" data-toggle="modal" href="#exampleModalCenter">İş Ekle</a>
            </div>
            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
</header><!-- header -->

<div class="banner-job">
    <div class="banner-overlay"></div>
    <div class="container text-center">
        <h1 class="title">Uşak İş İlanları</h1>
        <h3>İster İş İlanı Ver İşçi Bul <br>İster İlan Ver, İşveren Seni Bulsun !</h3>


    </div>
</div>

<div class="page">
    <div class="container">
        <div class="section category-items job-category-items  text-center">
            <ul class="category-list">
                @foreach($categories as $item)
                    <li class="category-item">
                        <a href="">
                            <div class="category-icon"><img src="{{asset($item->photo)}}" alt="images"
                                                            class="img-fluid"></div>
                            <span class="category-title">{{$item->name}}</span>
                            <span class="category-quantity">(1298)</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div><!-- category ad -->

        <div class="section latest-jobs-ads">
            <div class="section-title tab-manu">
                <h4>Son Eklenenler</h4>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#isveren" class="active" data-toggle="tab">İşverenler</a></li>
                    <li role="presentation"><a href="#is-arayan"  data-toggle="tab">İş Arayanlar</a></li>
                </ul>
            </div>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="isveren">

                    @forelse($jobs as $item)
                        @if($item->type_id==2)
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href=""><img src="@if($item->type_id==1)@if($item->gender==1) {{asset('img/man.png')}} @else {{asset('img/woman.png')}} @endif @else {{asset('img/boss.png')}} @endif" alt="Fotoğraf"
                                                                    class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span class="title">{{$item->product_name}}</span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$item->address}} </li>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>@if($item->operation_type==1)Full Time @else Part Time @endif
                                        </li>
                                        <li><i class="fa fa-eye-slash" aria-hidden="true"></i>@if($item->gender==1)Bay @elseif($item->gender==2) Bayan @else Unisex @endif
                                        </li>
                                        <li><i class="fa fa-tags" aria-hidden="true"></i>{{$item->category}}
                                        </li>
                                        <li><i class="fa fa-bookmark" aria-hidden="true"></i>
                                            {{$item->detail}}
                                        </li>
                                    </ul>
                                </div><!-- ad-meta -->
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="tel:{{$item->contact_number}}" class="btn btn-primary">Ara</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->
                        @endif
                        @empty
                                <h4 align="center">Henüz ilan eklenmedi</h4>
                    @endforelse


                </div><!-- tab-pane -->

                <div role="tabpanel" class="tab-pane fade in" id="is-arayan">


                    @forelse($jobs as $item)
                        @if($item->type_id==1)
                            <div class="job-ad-item">
                                <div class="item-info">
                                    <div class="item-image-box">
                                        <div class="item-image">
                                            <a href=""><img src="@if($item->type_id==1)@if($item->gender==1) {{asset('img/man.png')}} @else {{asset('img/woman.png')}} @endif @else {{asset('img/boss.png')}} @endif" alt="Fotoğraf"
                                                                            class="img-fluid"></a>
                                        </div><!-- item-image -->
                                    </div>

                                    <div class="ad-info">
                                        <span class="title">{{$item->name}}</span>
                                        <div class="ad-meta">
                                            <ul>
                                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>@if($item->operation_type==1)Full Time @else Part Time @endif
                                                </li>
                                                <li><i class="fa fa-eye-slash" aria-hidden="true"></i>@if($item->gender==1)Bay @elseif($item->gender==2) Bayan @else Unisex @endif
                                                </li>
                                                <li><i class="fa fa-tags" aria-hidden="true"></i>{{$item->category}}
                                                </li>
                                                <li><i class="fa fa-bookmark" aria-hidden="true"></i>
                                                    {{$item->detail}}
                                                </li>
                                            </ul>
                                        </div><!-- ad-meta -->
                                    </div><!-- ad-info -->
                                    <div class="button">
                                        <a href="tel:{{$item->contact_number}}" class="btn btn-primary">Ara</a>
                                    </div>
                                </div><!-- item-info -->
                            </div><!-- ad-item -->
                        @endif
                        @empty
                        <h4 align="center">Henüz ilan eklenmedi</h4>
                    @endforelse
                </div><!-- tab-pane -->


            </div><!-- tab-content -->
        </div><!-- trending ads -->

{{--        <div class="ad-section text-center">--}}
{{--            <a href="#"><img src="{{asset('jobs/ads/3.jpg')}}" alt="Image" class="img-fluid"></a>--}}
{{--        </div><!-- ad-section -->--}}


        <div class="section cta cta-two text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-jobs">
                            <img src="{{asset('jobs/images/icon/31.png')}}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->
                        <h3>{{$jobs_count2}}</h3>
                        <h4>İş İlanı</h4>
                        <p>İşverenlerin yayınladığı ilanlar</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-md-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-company">
                            <img src="{{asset('jobs/images/icon/32.png')}}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->
                        <h3>{{$jobs_count}}</h3>
                        <h4>İş Arayan</h4>
                        <p>İş arayanların yayınladığı ilanlar</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-md-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-candidate">
                            <img src="{{asset('jobs/images/icon/33.png')}}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->
                        <h3>5,798,298</h3>
                        <h4>Toplam ziyaret</h4>
                        <p>İş İlanları kategorisini ziyaret eden kişi sayısı</p>
                    </div>
                </div><!-- single-cta -->
            </div><!-- row -->
        </div><!-- cta -->

    </div><!-- conainer -->


</div><!-- page -->




<script src="{{asset('jobs/js/jquery.min.js')}}"></script>
<script src="{{asset('jobs/js/popper.min.js')}}"></script>
<script src="{{asset('jobs/js/bootstrap.min.js')}}"></script>
<script src="{{asset('jobs/js/price-range.js')}}"></script>
<script src="{{asset('jobs/js/main.js')}}"></script>
<script src="{{asset('jobs/js/switcher.js')}}"></script>



<!--Modal: Login / Register Form-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                            İş Ara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                            İş İlanı Ver</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in " id="panel7" role="tabpanel">
                        <div class="modal-body">
                            <div class="form-row mb-4">

                                <div class="col">
                                    <!-- First name -->
                                    <input type="text" id="name" class="form-control" placeholder="Ad Soyad">
                                </div>
                            </div>
                            <label>Cinsiyet</label>
                            <select id="male1" class="browser-default custom-select mb-4">
                                <option value="" selected disabled>Lütfen Seçiniz</option>
                                <option value="1" >Bay</option>
                                <option value="2">Bayan</option>
                            </select>
                            <label>Pozisyon</label>
                            <select id="category_id1" class="browser-default custom-select mb-4">
                                <option value="" selected disabled>Lütfen Seçiniz</option>
                                @foreach($categories as $item)
                                    <option value="{{$item->id}}" >{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label>Çalışma Şekli</label>
                            <select id="operation_type1" class="browser-default custom-select mb-4">
                                <option value="" selected disabled>Lütfen Seçiniz</option>
                                <option value="1" >Full Time</option>
                                <option value="2">Part Time</option>
                            </select>
                            <!-- Message -->
                            <div class="form-group">
                                <textarea class="form-control rounded-0" id="detail1" rows="3" placeholder="Detay"></textarea>
                            </div>

                            <input type="text" id="phone1" class="form-control" placeholder="İrtibat numarası">

                            <br>
                            <div class="well">

                                "İlan Ver" butonuna tıklayıp ilan gönderdikten sonra, eklemiş olduğunuz bilgilerin size ait olduğunu kabul etmiş sayılırsınız. Ayrıca Kişisel Verilerin Korunması Kanunu Uyarınca gönderdiğiniz bilgilerin ilan detaylarında gözükmesine rızanızın olduğunu kabul etmiş olursunuz.
                            </div>
                            <div class="text-center form-sm mt-2">

                                <button id="jobadd1" class="btn btn-info">İlan Ver </button>
                            </div>

                        </div>
                        <!--Body-->

                        <!--Footer-->
                        <div class="modal-footer">

                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Kapat</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade in show active" id="panel8" role="tabpanel">
                        <div class="modal-body">


                            <div class="form-row mb-4">

                                <div class="col">
                                    <!-- First name -->
                                    <input type="text" id="product_name" class="form-control" placeholder="Firma Adı" required>
                                </div>
                            </div>
                            <label>Cinsiyet</label>
                            <select id="male2" class="browser-default custom-select mb-4">
                                <option value="" selected disabled>Lütfen Seçiniz</option>
                                <option value="1" >Bay</option>
                                <option value="2">Bayan</option>
                                <option value="3">Unisex</option>
                            </select>
                            <label>Pozisyon</label>
                            <select id="category_id2" class="browser-default custom-select mb-4">
                                <option value="" selected disabled>Lütfen Seçiniz</option>
                                @foreach($categories as $item)
                                    <option value="{{$item->id}}" >{{$item->name}}</option>
                                @endforeach
                            </select>
                            <label>Çalışma Şekli</label>
                            <select id="operation_type2" class="browser-default custom-select mb-4">
                                <option value="" selected disabled>Lütfen Seçiniz</option>
                                <option value="1" >Full Time</option>
                                <option value="2">Part Time</option>
                            </select>
                            <!-- Message -->
                            <div class="form-group">
                                <textarea class="form-control rounded-0" id="detail2" rows="3" placeholder="Detay"></textarea>
                            </div>
                            <input type="text" id="address2" class="form-control" placeholder="Adres">
                            <br>
                            <input type="text" id="phone2" class="form-control" placeholder="İrtibat numarası">

                            <br>


                            <div class="well">

                                "İlan Ver" butonuna tıklayıp ilan gönderdikten sonra, eklemiş olduğunuz bilgilerin size ait olduğunu kabul etmiş sayılırsınız. Ayrıca Kişisel Verilerin Korunması Kanunu Uyarınca gönderdiğiniz bilgilerin ilan detaylarında gözükmesine rızanızın olduğunu kabul etmiş olursunuz.
                            </div>
                            <div class="text-center form-sm mt-2">
                                <button id="jobadd2" class="btn btn-info">İlan Ver </button>
                            </div>


                        </div>
                        <!--Body-->

                        <!--Footer-->
                        <div class="modal-footer">

                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Kapat</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->


<!-- Modal -->
{{--<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-dialog modal-lg" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title" id="exampleModalLongTitle">İş Ekle</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="col-md-12 mb-6">--}}
{{--                    https://mdbootstrap.com/docs/jquery/forms/basic/--}}
{{--                    <!-- Nav tabs -->--}}
{{--                    <ul class="nav nav-tabs md-tabs nav-justified">--}}
{{--                        <li class="nav-item waves-effect waves-light">--}}
{{--                            <a class="nav-link" data-toggle="tab" href="#panel1" role="tab" aria-selected="false">İşveren</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item waves-effect waves-light">--}}
{{--                            <a class="nav-link active" data-toggle="tab" href="#panel2" role="tab" aria-selected="true"> İş Arayan</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <!-- Tab panels -->--}}
{{--                    <div class="tab-content card">--}}
{{--                        <!--Panel 1-->--}}
{{--                        <div class="tab-pane fade in" id="panel1" role="tabpanel" >--}}
{{--                            <!-- Default form register -->--}}
{{--                            <form class="text-center border border-light p-5" action="#!">--}}

{{--                                <p class="h4 mb-4">Sign up</p>--}}

{{--                                <div class="form-row mb-4">--}}
{{--                                    <div class="col">--}}
{{--                                        <!-- First name -->--}}
{{--                                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">--}}
{{--                                    </div>--}}
{{--                                    <div class="col">--}}
{{--                                        <!-- Last name -->--}}
{{--                                        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- E-mail -->--}}
{{--                                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">--}}

{{--                                <!-- Password -->--}}
{{--                                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">--}}
{{--                                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">--}}
{{--                                    At least 8 characters and 1 digit--}}
{{--                                </small>--}}

{{--                                <!-- Phone number -->--}}
{{--                                <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">--}}
{{--                                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">--}}
{{--                                    Optional - for two step authentication--}}
{{--                                </small>--}}

{{--                                <!-- Newsletter -->--}}
{{--                                <div class="custom-control custom-checkbox">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">--}}
{{--                                    <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>--}}
{{--                                </div>--}}

{{--                                <!-- Sign up button -->--}}
{{--                                <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>--}}

{{--                                <!-- Social register -->--}}
{{--                                <p>or sign up with:</p>--}}

{{--                                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>--}}
{{--                                <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>--}}
{{--                                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>--}}
{{--                                <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>--}}

{{--                                <hr>--}}

{{--                                <!-- Terms of service -->--}}
{{--                                <p>By clicking--}}
{{--                                    <em>Sign up</em> you agree to our--}}
{{--                                    <a href="" target="_blank">terms of service</a>--}}

{{--                            </form>--}}
{{--                            <!-- Default form register -->--}}
{{--                        </div>--}}
{{--                        <!--/.Panel 1-->--}}
{{--                        <!--Panel 2-->--}}
{{--                        <div class="tab-pane fade active show" id="panel2" role="tabpanel">--}}
{{--                            <br>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus--}}
{{--                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat--}}
{{--                                ratione porro voluptate odit minima.</p>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus--}}
{{--                                reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat--}}
{{--                                ratione porro voluptate odit minima.</p>--}}
{{--                        </div>--}}
{{--                        <!--/.Panel 2-->--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}




<script src="{{asset('jobs/js/modal.js')}}" type="text/javascript"></script>
<script src="{{asset('jobs/js/tab.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<script>
    $("#jobadd1").click(function () {
        $.ajax({
                url: '{{route('jobs.add')}}',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {
                    name:$('#name').val(),
                    gender:$('#male1').val(),
                    category_id:$('#category_id1').val(),
                    operation_type:$('#operation_type1').val(),
                    detail:$('#detail1').val(),
                    phone:$('#phone1').val(),
                    type_id:'1',
                },
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) {
                    if (data == 200)
                        Swal.fire(
                            'İlan gönderildi!',
                            'İlanınız Eklendi, yönetici onayından sonra gözükecektir.',
                            'success'
                        ).then((result) => {
                            window.location.reload();
                        })
                    else{
                        Swal.fire(
                            'İlan Gönderilemedi!',
                            'İlanınız Eklenemedi. Bütün alanları doldurduğunuzdan emin olun !',
                            'error'
                        ).then((result) => {
                            window.location.reload();
                        })
                    }
                },
            error: function (xhr, ajaxOptions, thrownError) {
                Swal.fire(
                    'İlan Gönderilemedi!',
                    'İlanınız Eklenemedi. Bütün alanları doldurduğunuzdan emin olun !',
                    'error'
                ).then((result) => {
                    window.location.reload();
                })
            }
            }
        );
    });
    $("#jobadd2").click(function () {
        $.ajax({
                url: '{{route('jobs.add')}}',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {
                    product_name:$('#product_name').val(),
                    gender:$('#male2').val(),
                    category_id:$('#category_id2').val(),
                    operation_type:$('#operation_type2').val(),
                    detail:$('#detail2').val(),
                    phone:$('#phone2').val(),
                    address:$('#address2').val(),
                    type_id:'2',
                },
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) {
                    if (data == 200)
                        Swal.fire(
                            'İlan gönderildi!',
                            'İlanınız Eklendi, yönetici onayından sonra gözükecektir.',
                            'success'
                        ).then((result) => {
                            window.location.reload();
                        })
                    else{
                        Swal.fire(
                            'İlan Gönderilemedi!',
                            'İlanınız Eklenemedi. Bütün alanları doldurduğunuzdan emin olun !',
                            'error'
                        ).then((result) => {
                            window.location.reload();
                        })
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    Swal.fire(
                        'İlan Gönderilemedi!',
                        'İlanınız Eklenemedi. Bütün alanları doldurduğunuzdan emin olun !',
                        'error'
                    ).then((result) => {
                        window.location.reload();
                    })
                }
            }
        );
    });
</script>

</body>

</html>
{{--@stop--}}

