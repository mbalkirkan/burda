<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="tr">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title>Uşak Burda | @yield('title')</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="@yield('meta_description')"
          name="description">
    <meta
        content="@yield('meta_keywords')"
        name="keywords">
    <meta content="Muhammet, info@usakburda.com" name="author">
    <meta name="publisher" content="MB Software" />
    <meta name="robots" content="index, follow">
    <meta name="language" content="Turkish">
    <meta name="reply-to" content="info@usakburda.com" />

    <meta property="og:site_name" content="Uşak Burda">
    <meta property="og:title" content="Uşak Burda | @yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('meta_image')"><!-- link to image for socio -->
    <meta property="og:url" content="{{Request::url()}}">

    <link rel="shortcut icon" href="{{asset('img/fav.ico')}}">

    <!-- Fonts START -->
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
          rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/global/plugins/slider-layer-slider/css/layerslider.css')}}" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="{{asset('assets/global/css/components.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/layout/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/pages/css/style-shop.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/frontend/pages/css/style-layer-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/layout/css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/layout/css/themes/red.css')}}" rel="stylesheet" id="style-color">
    <link href="{{asset('assets/frontend/layout/css/custom.css')}}" rel="stylesheet">
    <!-- Theme styles END -->

@yield('head')
</head>
<!-- Head END -->

@yield('body')




<div class="footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-6 col-sm-6 padding-top-10">
                2013 © Mamo Yazılım, Tüm Hakları Gizlidir
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN PAYMENTS -->

            <!-- END PAYMENTS -->
        </div>
    </div>
</div>
<!-- END FOOTER -->



<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
<!--[if lt IE 9]>
<script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>
<![endif]-->


<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/frontend/layout/scripts/back-to-top.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="{{asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<!-- pop up -->
<script src="{{asset('assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js')}}"
        type="text/javascript"></script><!-- slider for products -->
<script src='/assets/global/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
<script src="{{asset('assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js')}}" type="text/javascript"></script>
<!-- Quantity -->

<!-- BEGIN LayerSlider -->
<script src="{{asset('assets/global/plugins/slider-layer-slider/js/greensock.js')}}" type="text/javascript"></script>
<!-- External libraries: GreenSock -->
<script src="{{asset('assets/global/plugins/slider-layer-slider/js/layerslider.transitions.js')}}" type="text/javascript"></script>
<!-- LayerSlider script files -->
<script src="{{asset('assets/global/plugins/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js')}}"
        type="text/javascript"></script><!-- LayerSlider script files -->
<script src="{{asset('assets/frontend/pages/scripts/layerslider-init.js')}}" type="text/javascript"></script>
<!-- END LayerSlider -->

<script src="{{asset('assets/frontend/layout/scripts/layout.js')}}" type="text/javascript"></script>
@yield('js')
<script type="text/javascript">
    jQuery(document).ready(function () {
        Layout.init();
        Layout.initOWL();

        Layout.initImageZoom();
        Layout.initTouchspin();
        LayersliderInit.initLayerSlider();
        @yield('plugin')
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157474922-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-157474922-1');
</script>

</body>
<!-- END BODY -->
</html>
