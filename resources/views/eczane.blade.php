@extends('layout')

@section('title')Nöbetçi Eczaneler @stop


@section('meta_description')Uşak açık eczaneleri görün, 24 saat açık eczaneler numaraları ve adreslerine ulaşın. Uşak burda uşağa dair herşey @stop
@section('meta_keywords') Uşak eczane, uşak açık eczane, uşak nöbetçi, uşak nöbetçi eczane, uşak ucuz eczane, uşak en iyi eczane, uşak yakın eczane, uşak ismet paşa caddesi eczane @stop


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
                <em>Toplam {{count($nobetci)}} Nöbetçi Eczane </em>
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
                <div class="col-md-9 col-sm-9">
                    <h1>Nöbetçi Eczaneler</h1>

                        @foreach($nobetci as $item)
                            <div class="col-md-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light">
                                    <div class="portlet-title">
                                        <div class="caption font-purple-plum">
                                            <i class="icon-speech font-purple-plum"></i>
                                            <span class="caption-subject bold uppercase"> {{$item['name']}}</span>
                                            <span class="caption-helper">{{$item['address']}}</span>
                                        </div>
                                        <div class="actions">

                                            <a href="tel:{{$item['phone']}}" class="btn btn-circle red-sunglo btn-sm">
                                                <i class="fa fa-phone"></i> Ara </a>

                                        </div>
                                    </div>

                                </div>
                                <!-- END PORTLET-->
                            </div>
                        @endforeach

                </div>
            </div>


        </div>
    </div>

    </body>
@endsection
