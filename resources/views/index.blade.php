@extends('layout')

@section('title')Anasayfa @stop

@section('meta_description')Uşak Parmaklarınızın Ucunda, tek tıkla heryere ulaşın, göz atın..@stop
@section('meta_keywords') Uşak cafe,uşak restoran,uşak gezilecek yerler,uşak alışveriş,uşak avm,uşak karun,uşak özdilek,uşak ulubey,uşak itiraf @stop


@section('body')
<!-- Body BEGIN -->
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

<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-35">
    <!-- LayerSlider start -->
    <div id="layerslider" style="width: 100%; height: 494px; margin: 0 auto;">

        <!-- slide one start -->
        <div class="ls-slide ls-slide1" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 24,25,27,28;">

            <img src="img/pexels-photo-230477.jpeg" class="ls-bg" alt="Slide background">

            <div class="ls-l ls-title" style="top: 96px; left: 35%; white-space: nowrap;" data-ls="
            fade: true;
            fadeout: true;
            durationin: 750;
            durationout: 750;
            easingin: easeOutQuint;
            rotatein: 90;
            rotateout: -90;
            scalein: .5;
            scaleout: .5;
            showuntil: 4000;
          ">Sıcak <strong>Kahve</strong> Molası ?
            </div>

            <div class="ls-l ls-mini-text" style="top: 338px; left: 35%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationout: 750;
          easingin: easeOutQuint;
          delayin: 300;
          showuntil: 4000;
          ">Hemen cafelere göz atın<br> gitmediğiniz mekanları görün
            </div>
        </div>
        <!-- slide one end -->

        <!-- slide two start -->
        <div class="ls-slide ls-slide2" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">

            <img src="https://live.staticflickr.com/4854/45613393644_016ff35f06_k.jpg" class="ls-bg"
                 alt="Slide background">

            <div class="ls-l ls-title" style="top: 40%; left: 70%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationin: 750; durationout: 109750;
          easingin: easeOutQuint;
          easingout: easeInOutQuint;
          delayin: 0;
          delayout: 0;
          rotatein: 90;
          rotateout: -90;
          scalein: .5;
          scaleout: .5;
          showuntil: 4000;
          "><strong>Görmediğiniz</strong> Yerleri Keşfedin <em>Parmağınızın Ucunda</em>
            </div>

            {{--            <div class="ls-l ls-price" style="top: 50%; left: 45%; white-space: nowrap;" data-ls="--}}
            {{--          fade: true;--}}
            {{--          fadeout: true;--}}
            {{--          durationout: 109750;--}}
            {{--          easingin: easeOutQuint;--}}
            {{--          delayin: 300;--}}
            {{--          scalein: .8;--}}
            {{--          scaleout: .8;--}}
            {{--          showuntil: 4000;"><b>from</b> <strong><span>$</span>25</strong>--}}
            {{--            </div>--}}

            <a href="javascript:;" class="ls-l ls-more"
               style="top: 72%; left: 70%; display: inline-block; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationin: 750;
          durationout: 750;
          easingin: easeOutQuint;
          easingout: easeInOutQuint;
          delayin: 0;
          delayout: 0;
          rotatein: 90;
          rotateout: -90;
          scalein: .5;
          scaleout: .5;
          showuntil: 4000;">Keşfe Çık
            </a>
        </div>
        <!-- slide two end -->

        <!-- slide three start -->
        <div class="ls-slide ls-slide3" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 92,93,105;">

            <img
                src="https://images.pexels.com/photos/612790/pexels-photo-612790.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                class="ls-bg" alt="Slide background">

            <div class="ls-l ls-title" style="top: 83px; left: 80%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationin: 750;
          durationout: 750;
          easingin: easeOutQuint;
          rotatein: 90;
          rotateout: -90;
          scalein: .5;
          scaleout: .5;
          showuntil: 4000;
          ">Cafe &amp; Restoran <strong>Menü'lerini</strong> İnceleyin
            </div>

        </div>
        <!-- slide three end -->

        <!-- slide four start -->
        <div class="ls-slide ls-slide4" data-ls="offsetxin: right; slidedelay: 7000; transition2d: 110,111,112,113;">

            <img src="https://live.staticflickr.com/7875/40027328673_70eb4d4ae1_h.jpg" class="ls-bg"
                 alt="Slide background">

            <div class="ls-l ls-title" style="top: 60%; left: 48%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationin: 750;
          durationout: 750;
          easingin: easeOutQuint;
          rotatein: 90;
          rotateout: -90;
          scalein: .5;
          scaleout: .5;
          showuntil: 4000;">
                <strong> Uşak<br>
                    Burda</strong>
            </div>

            <div class="ls-l ls-mini-text" style="top: 90%; left: 48%; white-space: nowrap;" data-ls="
          fade: true;
          fadeout: true;
          durationout: 750;
          easingin: easeOutQuint;
          delayin: 300;
          scalein: .8;
          scaleout: .8;
          showuntil: 4000;">
                <span>Sen nerdesin ?</span>

            </div>

        </div>
        <!-- slide four end -->
    </div>
    <!-- LayerSlider end -->
</div>
<!-- END SLIDER -->

<div class="main">
    <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SALE PRODUCT -->
            <div class="col-md-12 sale-product">
                <h2>Son eklenenler</h2>
                <div class="owl-carousel owl-carousel3">


                    @foreach($new_products as $item)
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="{{$item->featured_image}}" class="img-responsive" alt="{{$item->name}}">
                                </div>
                                <h3><a href="{{route('product',['category'=>$item->product_categories_slug,'product'=>$item->slug]) }}">{{$item->name}}</a></h3>
                                <div class="pi-price">{{$item->description}}</div>
                                <a href="{{route('category',['category'=>$item->product_categories_slug]) }}"
                                   class="btn btn-default add2cart">{{$item->product_categories_name}}</a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-4">
                <ul class="list-group margin-bottom-25 sidebar-menu">
                    <li class="list-group-item clearfix"><a href="{{route('jobs.index')}}"><i
                                class="fa fa-bullhorn"></i> İş İlanları</a></li>
                    @foreach($categories as $item)
                        <li class="list-group-item clearfix"><a href="{{route('category',['category'=>$item->slug])}}"><i
                                    class="{{$item->icon}}"></i> {{$item->name}}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-8">
                <h2>Cafe &amp; Restoranlar</h2>
                <div class="owl-carousel owl-carousel3">
                    @foreach($cafe_restoran as $item)
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <img src="{{$item->featured_image}}" class="img-responsive"
                                         alt="{{$item->name}}">
                                </div>
                                <h3><a href="{{route('product',['category'=>$item->product_categories_slug,'product'=>$item->slug]) }}">{{$item->name}}</a></h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- END CONTENT -->
        </div>

        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">
            <!-- BEGIN TWO PRODUCTS -->
            <div class="col-md-6 two-items-bottom-items">
                <h2>Gezilecek &amp; Fotoğraflık Yerler</h2>
                <div class="owl-carousel owl-carousel2">
                    @foreach($gallery as $item)
                        <div>
                            <div class="product-item">
                                <div class="pi-img-wrapper">
                                    <a href="{{$item->featured_image}}" class=" fancybox-button">     <img src="{{$item->featured_image}}" class="img-responsive"
                                                                                                                          alt="{{$item->name}}"></a>


                                </div>
                                <h3>{{$item->name}}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- END TWO PRODUCTS -->
            <!-- BEGIN PROMO -->
            <div class="col-md-6 shop-index-carousel">
                <div class="content-slider">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($campaigns as $item)
                                <li data-target="#myCarousel" data-slide-to="{{$item->id-1}}"
                                    @if ($loop->first) class="active" @endif ></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($campaigns as $item)
                                <div @if ($loop->first) class="item active" @else class="item" @endif >
                                    <img src="{{$item->featured_image}}"
                                         class="img-responsive" alt="{{$item->name}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROMO -->
        </div>
        <!-- END TWO PRODUCTS & PROMO -->
    </div>
</div>

<!-- BEGIN BRANDS -->
<div class="brands">
    <div class="container">
        <div class="owl-carousel owl-carousel6-brands">
            <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/canon.jpg" alt="canon"
                                                  title="canon"></a>
            <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/esprit.jpg" alt="esprit"
                                                  title="esprit"></a>
            <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
            <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/next.jpg" alt="next"
                                                  title="next"></a>
            <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/puma.jpg" alt="puma"
                                                  title="puma"></a>
            <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/zara.jpg" alt="zara"
                                                  title="zara"></a>
            <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/canon.jpg" alt="canon"
                                                  title="canon"></a>
            <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/esprit.jpg" alt="esprit"
                                                  title="esprit"></a>
            <a href="shop-product-list.html"><img src="assets/frontend/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
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


@stop

<!-- BEGIN FOOTER -->
