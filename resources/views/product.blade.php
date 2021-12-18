@extends('layout')

@section('title'){{$product->name}}@stop


@section('meta_description')Uşak {{$product->name}} adresi, iletişim bilgileri, görseller ve daha fazlası. {{$product->name}} hakkında daha fazla bilgi edinin. Uşaktaki tüm işyerlerini kolayca keşfedin, inceleyin, ulaşın. @stop
@section('meta_keywords')Uşak {{$product->name}}, {{$product->name}}, Uşakta {{$product->name}}, {{$product->name}} nerede,{{$product->name}} uşak, {{$product->name}} nasıl giderim, {{$product->name}} numara, {{$product->name}} iletişim, {{$product->name}} adres, {{$product->name}} menü, {{$product->name}}  menüleri, {{$product->name}}  ürünleri @stop

@section('meta_image'){{asset($product->featured_image)}}@stop

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('assets/global/plugins/rateit/src/rateit.css')}}" rel="stylesheet" type="text/css">
@stop

@section('body')
    <body class="corporate">
    <!-- BEGIN HEADER -->
    <div class="header">
        <div class="container">
            <a class="site-logo" style="padding-top: 10px; padding-bottom: 10px" href="{{route('index')}}"><img src="{{asset('img/logo.png')}}"
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
    <!-- Header END -->


    <div class="main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('index')}}">Anasayfa</a></li>
                <li><a href="{{route('category',['category'=>$product->product_categories_slug]) }}">{{$product->product_categories_name}}</a></li>
                <li class="active">{{$product->name}}</li>
            </ul>
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
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
                        <li class="list-group-item clearfix"><a href="{{route('eczane')}}"><i
                                    class="fa fa-medkit"></i> Nöbetçi Eczaneler</a></li>
                    </ul>

{{--                    <div class="blog-tags margin-bottom-20">--}}
{{--                        <h2>Etiketler</h2>--}}
{{--                        <br>--}}
{{--                        <ul>--}}
{{--                          <li><a href="javascript:;"><i class="fa fa-tags"></i>  Uşak {{$product->name}} </a></li>--}}
{{--                          <li><a href="javascript:;"><i class="fa fa-tags"></i>  {{$product->name}} </a></li>--}}
{{--                          <li><a href="javascript:;"><i class="fa fa-tags"></i>  Uşakta {{$product->name}} </a></li>--}}
{{--                          <li><a href="javascript:;"><i class="fa fa-tags"></i>  {{$product->name}} nerede </a></li>--}}
{{--                          <li><a href="javascript:;"><i class="fa fa-tags"></i>  {{$product->name}} uşak </a></li>--}}
{{--                          <li><a href="javascript:;"><i class="fa fa-tags"></i>  {{$product->name}} nasıl giderim </a></li>--}}
{{--                          <li><a href="javascript:;"><i class="fa fa-tags"></i>  {{$product->name}} numara </a></li>--}}
{{--                          <li><a href="javascript:;"><i class="fa fa-tags"></i>  {{$product->name}} iletişim </a></li>--}}
{{--                          <li><a href="javascript:;"><i class="fa fa-tags"></i>  {{$product->name}} adres</a></li>--}}

{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
                <!-- BEGIN CONTENT -->
                <div class="col-md-9 col-sm-7">
                    <h1>{{$product->name}}</h1>
                    <div class="content-page">
                        <div class="row margin-bottom-30">
                            <!-- BEGIN CAROUSEL -->
                            <div class="col-md-5 front-carousel">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        @foreach(json_decode($product->photos) as $item)
                                        <div class="item @if($loop->first) {{"active"}} @endif">
                                            <img alt="" src="{{$item->photo}}">
                                            <div class="carousel-caption">
                                                <p>{{$item->description}}</p>
                                            </div>
                                        </div>
                                            @endforeach

                                    </div>
                                    <!-- Carousel nav -->
                                    <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a data-slide="next" href="#myCarousel" class="carousel-control right">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- END CAROUSEL -->

                            <!-- BEGIN PORTFOLIO DESCRIPTION -->
                            <div class="col-md-7">
                                <h2>Hakkında</h2>
                                <p>{{$product->description}}</p>
                                <br>
                                <div class="row front-lists-v2 margin-bottom-15">
                                    <div class="col-md-9">
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-phone"></i> <a href="tel:{{$product->phone}}">{{$product->phone}}</a></li>
                                            <li><i class="fa fa-map-marker"></i> {{$product->address}}</li>
                                            <li><i class="fa fa-globe"></i><a href="{{$product->googlemaps_address}}">Haritalarda Görüntüle</a> </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- END PORTFOLIO DESCRIPTION -->
                        </div>
                        <div class="product-page-content">
                            <ul id="myTab" class="nav nav-tabs">
                                <li><a href="#Aciklama" data-toggle="tab">Açıklama</a></li>
                                <li><a href="#Menu" data-toggle="tab">Menü</a></li>
                                <li class="active"><a href="#Yorumlar" data-toggle="tab">Yorumlar ({{count($product_comments)}})</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade" id="Aciklama">
                                    {!! $product->explanation !!}
                                </div>
                                <div class="tab-pane fade" id="Menu">
                                    <!-- BEGIN ACCORDION PORTLET-->
                                    @foreach($product_items as $item)
                                        @if($loop->first)
                                            <div class="panel-group accordion" id="accordion1">
                                                @endif
                                                @if($loop->first||$product_items[$loop->index-1]->category_id!=$item->category_id)
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_{{$item->id}}">
                                                                {{$item->item_category_name}} </a>
                                                        </h4>
                                                    </div>

                                                    <div id="collapse_{{$item->id}}" class="panel-collapse collapse">
                                                        <div class="panel-body" style="height:200px; overflow-y:auto;">

                                                            <table class="datasheet">
                                                                @endif
                                                                <tr>
                                                                    <td class="datasheet-features-type">{{$item->name}}</td>
                                                                    <td>{{$item->price}} ₺</td>
                                                                </tr>
                                                                @if($loop->last|| $product_items[$loop->index+1]->category_id!=$item->category_id)
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
@endif
                                                @if($loop->last)
                                            </div>
                                    @endif
                                    @endforeach
                                    <!-- END ACCORDION PORTLET-->

                                </div>
                                <div class="tab-pane fade in active" id="Yorumlar">
                                    <!--<p>There are no reviews for this product.</p>-->
                                    @if(count( $product_comments)==0)
                                        <p>Henüz yorum yapılmamış.</p>
                                    @else
                                    @foreach($product_comments as $items)
                                    <div class="review-item clearfix">
                                        <div class="review-item-submitted">
                                            <strong>{{$items->name}}</strong>
                                            <em>{{ \Carbon\Carbon::parse($items->created_at)->format('d.m.Y h:m')}}  </em>
                                            <div class="rateit" data-rateit-value="{{$items->rating}}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                                        </div>
                                        <div class="review-item-content">
                                            <p>{{$items->comment}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                                    <!-- BEGIN FORM-->

                                        <h2>Yorum yap</h2>
                                        <div class="form-group">
                                            <label for="name">Ad <span class="require">*</span></label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="review">Yorum <span class="require">*</span></label>
                                            <textarea class="form-control" rows="8" id="review"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Puanla</label>
                                            <input type="range" value="4" step="0.25" id="backing5">
                                            <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                                            </div>
                                        </div>
                                        <div class="padding-top-20">
                                            <button type="submit" id="comment_send" class="btn btn-primary">Gönder</button>
                                        </div>

                                    <!-- END FORM-->
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- END CONTENT -->

                <!-- BEGIN BLOG TAGS -->

                <!-- END BLOG TAGS -->
            </div>
            <!-- BEGIN SIDEBAR & CONTENT -->

        </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2>Hakkımızda</h2>
                    <p>Bilgisayar konusunda uzman ekibimizle her geçen gün kendimizi güncelliyoruz. En iyi arayüz
                        sistemlerini ve bunların entegrasyonlarını sağlıyoruz. </p>
                    <p></p>
                </div>
                <!-- END BOTTOM ABOUT BLOCK -->
                <!-- BEGIN BOTTOM INFO BLOCK -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2>Bilgi</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i> <a href="{{route('privacy')}}">Gizlilik Politikası</a></li>
                        <li><i class="fa fa-angle-right"></i> <a   href="{{route('terms')}}">Kullanım Koşulları</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Görüş ve Önerileriniz</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Şirket Girişi</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="">Yönetici Girişi</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{route('sitemap')}}" target="_blank">Sitemap</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Kurumsal Websiteniz Olsun</a></li>
                    </ul>
                </div>
                <!-- END INFO BLOCK -->



                <!-- BEGIN BOTTOM CONTACTS -->
                <div class="col-md-4 col-sm-6 pre-footer-col">
                    <h2>Bağlantılarımız</h2>
                    <address class="margin-bottom-40">
                        Uşak, TR<br>
                        Email: <a href="mailto:info@usakburda.com">info@usakburda.com</a><br>
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
                        <li><a class="facebook" data-original-title="facebook" target="_blank" href="https://www.facebook.com/usakburdacom/"></a></li>
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





    <!-- END PAGE LEVEL JAVASCRIPTS -->
    </body>
    @stop
@section('js')

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->

    <script src="{{asset('assets/frontend/layout/scripts/back-to-top.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{asset('assets/global/plugins/rateit/src/jquery.rateit.js')}}" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>




    <script>
        $("#comment_send").click(function () {
            $.ajax({
                    url: '{{route('comment.add')}}',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        name:$('#name').val(),
                        review:$('#review').val(),
                        backing5:$('#backing5').val(),
                        product_id: {{$product->id}}
                    },
                    dataType: 'JSON',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                        if (data == 200)
                            Swal.fire(
                                'Yorum gönderildi!',
                                'Yorumunuz Eklendi, yönetici onayından sonra gözükecektir.',
                                'success'
                            ).then((result) => {
                                window.location.reload();
                            })
                        else{
                            Swal.fire(
                                'Yorum Gönderilemedi!',
                                'Yorumunuz Eklenemedi.',
                                'error'
                            ).then((result) => {
                                window.location.reload();
                            })
                        }
                    }
                }
            );
        });
    </script>
    @stop
