@extends('layout')

@section('title')Hakkımızda @stop


@section('meta_description')Uşak parmaklarınızın ucunda. Uşaktaki tüm işyerlerini, cafe, restoran, apart, yurt  vb. yerleri kolayca keşfedin, inceleyin, ulaşın. İş ilanı verin veya iş arayın. Uşakla ilgili herşey burada. @stop
@section('meta_keywords') Uşak cafe,uşak restoran,uşak gezilecek yerler,uşak alışveriş,uşak avm,uşak karun,uşak özdilek,uşak ulubey,uşak itiraf, uşak burda hakkımızda , hakkımızda @stop


@section('body')
    <body class="ecommerce">

    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" style="padding-top: 10px; padding-bottom: 10px" href="{{route('index')}}"><img  src="{{asset('img/logo.png')}}"
                                                                                                                 alt="Uşak Burda"></a>

            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

            <div class="header-navigation">
                <ul>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            BİZE ULAŞIN
                        </a>
                    </li>
                    <li class="dropdown">
                        <a  href="{{route('about')}}">
                            HAKKIMIZDA
                        </a>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                            KATEGORİ

                        </a>

                        <!-- BEGIN DROPDOWN MENU -->
                        <ul class="dropdown-menu">
                            @foreach($categories as $item)
                                <li ><a href="{{route('category',['category'=>$item->slug])}}"><i
                                            class="{{$item->icon}}"></i> {{$item->name}}</a></li>
                            @endforeach
                        </ul>
                        <!-- END DROPDOWN MENU -->
                    </li>
                    <li class="dropdown">
                        <a href="{{route('jobs.index')}}">
                            İŞ İLANLARI
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="main">
        <div class="container">

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
                <div class="col-md-9 col-sm-9">
                    <h1>Hakkımızda</h1>
                    <div class="content-page">
                        <p><img src="{{asset('img/about.jpg')}}" alt="Hakkımızda" class="img-responsive"></p>

                        <p>Güzel ülkemizin dört bir köşesinin güzelliklerini saymakla bitiremeyiz, bunu hiçbirimiz yalanlayamaz. Biraz küçük bir il olan Uşak ilimizin böyle bir sitesinin olmasını istedik. Uşağı tanıtan, uşaktaki işletmeleri kolayca erişilebilir yapan, gerektiğinde onlar hakkında bilgi edinilebilecek, ulaşılabilir hale getirecek hatta ve hatta onun hakkında bildiklerini puanlayarak yorum yapılabilcek bir platform. </p>


                        <h2>Biz kimiz ?</h2>

                        <p>Uşak ilimize faydalı olabileceği düşüncesiyle yola çıkmış bir ekipten ibaretiz. </p>

                        <h3>Neyi amaçlıyoruz ?</h3>
                        <ul>
                            <li>Uşak ilimizdeki işletmeleri kolay ulaşılabilir kılmak</li>
                            <li>İşletmeler hakkında daha fazla bilgi edinmenizi sağlamak</li>
                            <li>Yorumlarınızda insanlara hangi işletmenin iyi hangisinin kötü olduğu hakkında bilgi edindirtmek</li>
                            <li>Daha güzel işler başarmak !</li>
                        </ul>


                    </div>
                </div>
            </div>


        </div>
    </div>

    </body>
    @endsection
