@extends('layout')

@section('title'){{ $category_name}}@stop


@section('meta_description')Uşak Parmaklarınızın Ucunda, tek tıkla heryere ulaşın, göz atın.. @stop
@section('meta_keywords')Uşak {{$category_name}}, Uşakta {{$category_name}}, Uşakta en iyi {{$category_name}}, Uşakta ucuz {{$category_name}}, Uşak açık {{$category_name}}, Açık {{$category_name}}, Uşak Burda @stop

@section('meta_image'){{$category_photo}}@stop

@section('body')


    <body class="ecommerce">


    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" href="{{route('index')}}"><img src="assets/frontend/layout/img/logos/logo-shop-red.png"
                                                             alt="Metronic Shop UI"></a>

            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>



        </div>
    </div>
    <!-- Header END -->

    <div class="title-wrapper" style="    background: #72c2ff url({{$category_photo}}) no-repeat 50% 50%;">
        <div class="container">
            <div class="container-inner">
                <h1>Uşak - <span>{{$category_name}}</span></h1>
                <em>Toplam {{count($products)}} {{$category_name}}</em>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <!-- BEGIN SIDEBAR -->
                <div class="sidebar col-md-3 col-sm-4">
                    <ul class="list-group margin-bottom-25 sidebar-menu">
                        <li class="list-group-item clearfix"><a href="{{route('jobs.index')}}"><i
                                    class="fa fa-bullhorn"></i> İş İlanları</a></li>
                        @foreach($categories as $item)
                            <li @if($item->name==$category_name) class="active list-group-item clearfix"
                                @else  class="list-group-item clearfix" @endif ><a
                                    href="{{route('category',['category'=>$item->slug])}}"><i
                                        class="{{$item->icon}}"></i> {{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-7">
                    <!-- BEGIN PRODUCT LIST -->
                    <div class="row product-list">


                    @foreach($products as $item)
                        <!-- PRODUCT ITEM START -->
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="product-item">
                                    <div class="pi-img-wrapper">
                                        <img src="{{$item->featured_image}}"
                                             class="img-responsive" alt="{{$item->name}}">

                                    </div>
                                    <h3><a href="{{route('product',['category'=>$item->product_categories_slug,'product'=>$item->slug]) }}">{{$item->name}}</a></h3>
                                    <div class="pi-price">{{$item->description}}</div>
                                </div>
                            </div>
                            <!-- PRODUCT ITEM END -->
                        @endforeach

                    </div>
                    <!-- PRODUCT ITEM END -->
                </div>

                <!-- END PRODUCT LIST -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
    </div>

    <!-- BEGIN BRANDS -->
    <div class="brands">
        <div class="container">
            <div class="owl-carousel owl-carousel6-brands">
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/canon.jpg" alt="canon"
                                                      title="canon"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/esprit.jpg"
                                                      alt="esprit" title="esprit"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/gap.jpg" alt="gap"
                                                      title="gap"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/next.jpg" alt="next"
                                                      title="next"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/puma.jpg" alt="puma"
                                                      title="puma"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/zara.jpg" alt="zara"
                                                      title="zara"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/canon.jpg" alt="canon"
                                                      title="canon"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/esprit.jpg"
                                                      alt="esprit" title="esprit"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/gap.jpg" alt="gap"
                                                      title="gap"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/next.jpg" alt="next"
                                                      title="next"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/puma.jpg" alt="puma"
                                                      title="puma"></a>
                <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/zara.jpg" alt="zara"
                                                      title="zara"></a>
            </div>
        </div>
    </div>
    <!-- END BRANDS -->

    <!-- BEGIN STEPS -->
    <div class="steps-block steps-block-red">
        <div class="container">
            <div class="row">
                <div class="col-md-6 steps-block-col">
                    <i class="fa fa-phone"></i>
                    <div>
                        <h2>555 899 81 23</h2>
                        <em>Bize Ulaşın</em>
                    </div>
                    <span>&nbsp;</span>
                </div>
                <div class="col-md-6 steps-block-col">
                    <i class="fa fa-bullhorn"></i>
                    <div>
                        <h2>Sesinizi Duyuralım</h2>
                        <em>İlan ve İşyerlerinizi Tanıtalım</em>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- END STEPS -->

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Hakkımızda</h2>
                    <p>Bilgisayar konusunda uzman ekibimizle her geçen gün kendimizi güncelliyoruz. En iyi arayüz
                        sistemlerini ve bunların entegrasyonlarını sağlıyoruz. </p>
                    <p></p>
                </div>
                <!-- END BOTTOM ABOUT BLOCK -->
                <!-- BEGIN BOTTOM INFO BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Bilgi</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Şirketinizi Ekleyin</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Bize Ulaşın</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Görüş ve Önerileriniz</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Şirket Girişi</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="contacts.html">Yönetici Girişi</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Kariyer</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Kurumsal Websiteniz Olsun</a></li>
                    </ul>
                </div>
                <!-- END INFO BLOCK -->

                <!-- BEGIN TWITTER BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2 class="margin-bottom-0">Latest Tweets</h2>

                </div>
                <!-- END TWITTER BLOCK -->

                <!-- BEGIN BOTTOM CONTACTS -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Bağlantılarımız</h2>
                    <address class="margin-bottom-40">
                        Uşak, TR<br>
                        Tel: 300 323 3456<br>
                        Fax: 300 323 1456<br>
                        Email: <a href="mailto:info@metronic.com">info@usakburda.com</a><br>
                    </address>
                </div>
                <!-- END BOTTOM CONTACTS -->
            </div>
            <hr>
            <div class="row">
                <!-- BEGIN SOCIAL ICONS -->
                <div class="col-md-6 col-sm-6">
                    <ul class="social-icons">
                        <li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
                        <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                        <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                        <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                        <li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
                        <li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
                        <li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
                        <li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
                    </ul>
                </div>
                <!-- END SOCIAL ICONS -->
                <!-- BEGIN NEWLETTER -->

                <!-- END NEWLETTER -->
            </div>
        </div>
    </div>
    <!-- END PRE-FOOTER -->


    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/global/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
            type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    <!-- pop up -->
    <script src="assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js"
            type="text/javascript"></script><!-- slider for products -->
    <script src='assets/global/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script>
    <!-- product zoom -->
    <script src="assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js"
            type="text/javascript"></script><!-- Quantity -->
    <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="assets/global/plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
    <!-- for slider-range -->

    <script src="assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
            Layout.initSliderRange();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
    </body>

@stop
