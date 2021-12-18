@extends('layout')

@section('title')Coronavirüs Anlık Harita @stop


@section('meta_description')Uşak açık eczaneleri görün, 24 saat açık eczaneler numaraları ve adreslerine ulaşın. Uşak burda uşağa dair herşey @stop
@section('meta_keywords') Uşak eczane, uşak açık eczane, uşak nöbetçi, uşak nöbetçi eczane, uşak ucuz eczane, uşak en iyi eczane, uşak yakın eczane, uşak ismet paşa caddesi eczane @stop

@section('meta_image')https://images.unsplash.com/photo-1579635102486-47eef5652e3c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80 @stop
@section('body')
    <body class="ecommerce">

    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" style="padding-top: 10px; padding-bottom: 10px" href="{{route('index')}}"><img
                    src="{{asset('img/logo.png')}}"
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
                        <a href="{{route('about')}}">
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
                                <li><a href="{{route('category',['category'=>$item->slug])}}"><i
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
    <div class="title-wrapper" style="    background: #72c2ff url(https://images.unsplash.com/photo-1579635102486-47eef5652e3c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80) no-repeat 50% 50%;">
        <div class="container">
            <div class="container-inner">
                <h1>Uşak - <span>Nöbetçi Eczaneler</span></h1>

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
                            <li class="list-group-item clearfix "><a
                                    href="{{route('category',['category'=>$item->slug])}}"><i
                                        class="{{$item->icon}}"></i> {{$item->name}}</a></li>
                        @endforeach
                        <li class="active list-group-item clearfix"><a href="{{route('eczane')}}"><i
                                    class="fa fa-medkit"></i> Nöbetçi Eczaneler</a></li>
                    </ul>

                </div>

                <!-- END SIDEBAR -->
                <div class="col-md-9">
                    <!-- BEGIN WORLD PORTLET-->
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>World
                            </div>

                        </div>
                        <div class="portlet-body">
                            <div id="vmap_world" class="vmaps">
                            </div>
                        </div>
                    </div>
                    <!-- END WORLD PORTLET-->
                </div>
            </div>


        </div>
    </div>

    </body>
@endsection

@section('js')
    <script src="../../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>

    <script src="../../assets/admin/pages/scripts/maps-vector.js"></script>
    @stop

@section('plugin')
MapsVector.init();
@stop
@section('header')
    <link href="{{asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" media="screen" rel="stylesheet" type="text/css"/>
    @stop
