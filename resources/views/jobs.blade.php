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
    <meta property="og:image" content="@yield('meta_image')"><!-- link to image for socio -->
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
    <link rel="icon" href="{{asset('jobs/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{asset('jobs/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('jobs/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('jobs/images/ico/apple-touch-icon-72-precomposed.html')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('jobs/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <!-- icons -->





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
            <a class="navbar-brand" href="{{route('index')}}"><img class="img-fluid"
                                                                   src="{{asset('jobs/images/logo.png')}}"
                                                                   alt="Logo"></a>


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
                        <a href="job-list.html">
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

                    @foreach($jobs as $item)
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{$item->photo}}" alt="Fotoğraf"
                                                                    class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class=title>{{$item->name}}</a> @ <a href="#">{{$item->product_name}}</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$item->address}} </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$item->type}}</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{$item->category}}</a>
                                        </li>
                                    </ul>
                                </div><!-- ad-meta -->
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->
                    @endforeach


                </div><!-- tab-pane -->

                <div role="tabpanel" class="tab-pane fade in" id="is-arayan">

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{asset('jobs/images/job/2.png')}}" alt="Image"
                                                                    class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class=title>Graphics Designer</a> @ <a href="#">AOK Security</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San
                                                Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a>
                                        </li>
                                    </ul>
                                </div><!-- ad-meta -->
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{asset('jobs/images/job/1.png')}}" alt="Image"
                                                                    class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class=title>Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San
                                                Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a>
                                        </li>
                                    </ul>
                                </div><!-- ad-meta -->
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{asset('jobs/images/job/4.png')}}" alt="Image"
                                                                    class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Human Resource Manager</a> @ <a href="#">Dropbox Inc</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San
                                                Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a>
                                        </li>
                                    </ul>
                                </div><!-- ad-meta -->
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->

                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{asset('jobs/images/job/3.png')}}" alt="Image"
                                                                    class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
                                <div class="ad-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San
                                                Francisco, CA, US </a></li>
                                        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a>
                                        </li>
                                    </ul>
                                </div><!-- ad-meta -->
                            </div><!-- ad-info -->
                            <div class="button">
                                <a href="#" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div><!-- item-info -->
                    </div><!-- ad-item -->
                </div><!-- tab-pane -->


            </div><!-- tab-content -->
        </div><!-- trending ads -->

        <div class="ad-section text-center">
            <a href="#"><img src="{{asset('jobs/ads/3.jpg')}}" alt="Image" class="img-fluid"></a>
        </div><!-- ad-section -->


        <div class="section cta cta-two text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-jobs">
                            <img src="{{asset('jobs/images/icon/31.png')}}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->
                        <h3>3,412</h3>
                        <h4>Live Jobs</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-md-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-company">
                            <img src="{{asset('jobs/images/icon/32.png')}}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->
                        <h3>12,043</h3>
                        <h4>Total Company</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->

                <div class="col-md-4">
                    <div class="single-cta">
                        <div class="cta-icon icon-candidate">
                            <img src="{{asset('jobs/images/icon/33.png')}}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->
                        <h3>5,798,298</h3>
                        <h4>Total Candidate</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div><!-- single-cta -->
            </div><!-- row -->
        </div><!-- cta -->

    </div><!-- conainer -->


</div><!-- page -->

<!-- download -->
<section id="download" class="clearfix parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Download on App Store</h2>
            </div>
        </div><!-- row -->

        <!-- row -->
        <div class="row">
            <!-- download-app -->
            <div class="col-md-4">
                <a href="#" class="download-app">
                    <img src="{{asset('jobs/images/icon/16.png')}}" alt="Image" class="img-fluid">
                    <span class="pull-left">
							<span>available on</span>
							<strong>Google Play</strong>
						</span>
                </a>
            </div><!-- download-app -->

            <!-- download-app -->
            <div class="col-md-4">
                <a href="#" class="download-app">
                    <img src="{{asset('jobs/images/icon/17.png')}}" alt="Image" class="img-fluid">
                    <span class="pull-left">
							<span>available on</span>
							<strong>App Store</strong>
						</span>
                </a>
            </div><!-- download-app -->

            <!-- download-app -->
            <div class="col-md-4">
                <a href="#" class="download-app">
                    <img src="{{asset('jobs/images/icon/18.png')}}" alt="Image" class="img-fluid">
                    <span class="pull-left">
							<span>available on</span>
							<strong>Windows Store</strong>
						</span>
                </a>
            </div><!-- download-app -->
        </div><!-- row -->
    </div><!-- contaioner -->
</section><!-- download -->

<!-- footer -->
<footer id="footer" class="clearfix">
    <!-- footer-top -->
    <section class="footer-top clearfix">
        <div class="container">
            <div class="row">
                <!-- footer-widget -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Quik Links</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">All Cities</a></li>
                            <li><a href="#">Help & Support</a></li>
                            <li><a href="#">Advertise With Us</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>How to sell fast</h3>
                        <ul>
                            <li><a href="#">How to sell fast</a></li>
                            <li><a href="#">Membership</a></li>
                            <li><a href="#">Banner Advertising</a></li>
                            <li><a href="#">Promote your ad</a></li>
                            <li><a href="#">Jobs Delivers</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget social-widget">
                        <h3>Follow us on</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
                        </ul>
                    </div>
                </div><!-- footer-widget -->

                <!-- footer-widget -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget news-letter">
                        <h3>Newsletter</h3>
                        <p>Jobs is Worldest leading Portal platform that brings!</p>
                        <!-- form -->
                        <form action="#">
                            <input type="email" class="form-control" placeholder="Your email id">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form><!-- form -->
                    </div>
                </div><!-- footer-widget -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- footer-top -->

    <div class="footer-bottom clearfix text-center">
        <div class="container">
            <p>Copyright &copy; 2013. Developed by MamoYazılım</p>
        </div>
    </div><!-- footer-bottom -->
</footer><!-- footer -->


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

                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput10">Your afasfasemail</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fas fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade in show active" id="panel8" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body">
                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-envelope prefix"></i>
                                <input  id="product_name" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput12">Firma isminiz</label>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-lock prefix"></i>
                                <input  id="name" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput13">Pozisyon </label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fas fa-lock prefix"></i>
                                <input id="detail" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Detay</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fas fa-lock prefix"></i>
                                <input  id="phone" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput14">İrtibat numarası</label>
                            </div>



                            <div class="md-form form-sm mb-4">
                                <i class="fas fa-lock prefix"></i>
                                <input  id="type" class="form-control form-control-sm validate">
                                <label data-error="wrong" data-success="right" for="modalLRInput14">Çalışma şekli</label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info">İlan Ver <i class="fas fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
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
</body>

</html>
{{--@stop--}}

