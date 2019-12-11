{{--@extends('layout')--}}

{{--@section('title')İş İlanları @stop--}}

{{--@section('meta_description') Uşakta iş ilanları, iş bulabileceğiniz veya iş yayınlayabileceğiniz bir ortam @endsection--}}
{{--@section('meta_keywords') Uşak iş ilanı, uşak iş ilanları, uşak işveren, uşak iş bul, uşak işçi bul, uşak işçi, uşak çalışan, uşak çalışan bul, uşak iş ver, uşak iş @stop--}}

{{--@section('meta_image')@stop--}}


{{--@section('header')--}}

    <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themeregion.com/jobs/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 14:05:07 GMT -->
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
                <a href="post.html" class="btn">İş Ekle</a>
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
                    <div class="job-ad-item">
                        <div class="item-info">
                            <div class="item-image-box">
                                <div class="item-image">
                                    <a href="job-details.html"><img src="{{asset('jobs/images/job/3.png')}}" alt="Image"
                                                                    class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class=title>CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
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
                                <span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
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
                                    <a href="job-details.html"><img src="{{asset('jobs/images/job/2.png')}}" alt="Image"
                                                                    class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>

                            <div class="ad-info">
                                <span><a href="job-details.html" class="title">Graphics Designer</a> @ <a href="#">AOK Security</a></span>
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
</body>
</html>
{{--@stop--}}

