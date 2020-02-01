@extends('layout')

@section('title')Gizlilik Politikası @stop


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
                    <h1>Gizlilik Politikası</h1>
                    <div class="content-page">

                        <div>Websitemiz, &ccedil;eşitli ama&ccedil;larla kişisel veriler toplayabilir. Aşağıda, toplanan kişisel verilerin nasıl ve ne şekilde toplandığı, bu verilerin nasıl ve ne şekilde korunduğu belirtilmiştir.&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&Uuml;yelik veya Websitemiz &uuml;zerindeki &ccedil;eşitli form ve anketlerin doldurulması suretiyle &uuml;yelerin kendileriyle ilgili bir takım kişisel bilgileri (isim-soy isim, firma bilgileri, telefon, adres veya e-posta adresleri gibi) Mağazamız tarafından işin doğası gereği toplanmaktadır.&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>Websitemiz&nbsp;bazı d&ouml;nemlerde m&uuml;şterilerine ve &uuml;yelerine kampanya bilgileri, yeni &uuml;r&uuml;nler hakkında bilgiler, promosyon teklifleri g&ouml;nderebilir. &Uuml;yelerimiz bu gibi bilgileri alıp almama konusunda her t&uuml;rl&uuml; se&ccedil;imi &uuml;ye olurken yapabilir, sonrasında &uuml;ye girişi yaptıktan sonra hesap bilgileri b&ouml;l&uuml;m&uuml;nden bu se&ccedil;imi değiştirilebilir ya da kendisine gelen bilgilendirme iletisindeki linkle bildirim yapabilir.&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>Sistemle ilgili sorunların tanımlanması ve verilen hizmet ile ilgili &ccedil;ıkabilecek sorunların veya uyuşmazlıkların hızla &ccedil;&ouml;z&uuml;lmesi i&ccedil;in, Websitemiz, kullanıcılarının IP adresini kaydetmekte ve bunu kullanmaktadır. IP adresleri, kullanıcıları genel bir şekilde tanımlamak ve kapsamlı demografik bilgi toplamak amacıyla da kullanılabilir.</div>
                        <div>&nbsp;</div>
                        <div>Websitemiz, &Uuml;yelik S&ouml;zleşmesi ile belirlenen ama&ccedil;lar ve kapsam dışında da, talep edilen bilgileri kendisi veya işbirliği i&ccedil;inde olduğu kişiler tarafından doğrudan pazarlama yapmak amacıyla kullanabilir. &nbsp;Kişisel bilgiler, gerektiğinde kullanıcıyla temas kurmak i&ccedil;in de kullanılabilir. Websitemiz tarafından talep edilen bilgiler veya kullanıcı tarafından sağlanan bilgiler veya Mağazamız &uuml;zerinden yapılan işlemlerle ilgili bilgiler; Websitemiz ve işbirliği i&ccedil;inde olduğu kişiler tarafından, "&Uuml;yelik S&ouml;zleşmesi" ile belirlenen ama&ccedil;lar ve kapsam dışında da, &uuml;yelerimizin kimliği ifşa edilmeden &ccedil;eşitli istatistiksel değerlendirmeler, veri tabanı oluşturma ve pazar araştırmalarında kullanılabilir.</div>
                        <div>&nbsp;</div>
                        <div>Websitemiz, gizli bilgileri kesinlikle &ouml;zel ve gizli tutmayı, bunu bir sır saklama y&uuml;k&uuml;m&uuml; olarak addetmeyi ve gizliliğin sağlanması ve s&uuml;rd&uuml;r&uuml;lmesi, gizli bilginin tamamının veya herhangi bir kısmının kamu alanına girmesini veya yetkisiz kullanımını veya &uuml;&ccedil;&uuml;nc&uuml; bir kişiye ifşasını &ouml;nlemek i&ccedil;in gerekli t&uuml;m tedbirleri almayı ve gerekli &ouml;zeni g&ouml;stermeyi taahh&uuml;t etmektedir.</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&Uuml;&Ccedil;&Uuml;NC&Uuml; TARAF WEB SİTELERİ VE UYGULAMALAR</div>
                        <div>Websitemiz, &nbsp;web sitesi d&acirc;hilinde başka sitelere link verebilir. Websitemiz, bu linkler vasıtasıyla erişilen sitelerin gizlilik uygulamaları ve i&ccedil;eriklerine y&ouml;nelik herhangi bir sorumluluk taşımamaktadır. Websitemiz ait sitede yayınlanan reklamlar, reklamcılık yapan iş ortaklarımız aracılığı ile kullanıcılarımıza dağıtılır. İş bu s&ouml;zleşmedeki Gizlilik Politikası Prensipleri, sadece Websitemiz kullanımına ilişkindir, &uuml;&ccedil;&uuml;nc&uuml; taraf web sitelerini kapsamaz.&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>TARAYICI &Ccedil;EREZLERİ&nbsp;</div>
                        <div>Websitemiz, sitemizi ziyaret eden kullanıcılar ve kullanıcıların web sitesini kullanımı hakkındaki bilgileri teknik bir iletişim dosyası (&Ccedil;erez-Cookie) kullanarak elde edebilir. Bahsi ge&ccedil;en teknik iletişim dosyaları, ana bellekte saklanmak &uuml;zere bir internet sitesinin kullanıcının tarayıcısına (browser) g&ouml;nderdiği k&uuml;&ccedil;&uuml;k metin dosyalarıdır. Teknik iletişim dosyası site hakkında durum ve tercihleri saklayarak İnternet'in kullanımını kolaylaştırır.</div>
                        <div>&nbsp;</div>
                        <div>Teknik iletişim dosyası, &nbsp;siteyi ka&ccedil; kişinin ziyaret ettiğini, bir kişinin siteyi hangi ama&ccedil;la, ka&ccedil; kez ziyaret ettiğini ve ne kadar sitede kaldıkları hakkında istatistiksel bilgileri elde etmeye ve kullanıcılar i&ccedil;in &ouml;zel tasarlanmış kullanıcı sayfalarından &nbsp;dinamik olarak reklam ve i&ccedil;erik &uuml;retilmesine yardımcı olur. Teknik iletişim dosyası, ana bellekte veya e-postanızdan veri veya başkaca herhangi bir kişisel bilgi almak i&ccedil;in tasarlanmamıştır. Tarayıcıların pek &ccedil;oğu başta teknik iletişim dosyasını kabul eder bi&ccedil;imde tasarlanmıştır ancak kullanıcılar dilerse teknik iletişim dosyasının gelmemesi veya teknik iletişim dosyasının g&ouml;nderildiğinde uyarı verilmesini sağlayacak bi&ccedil;imde ayarları değiştirebilirler.</div>
                        <div>&nbsp;</div>
                        <div>Websitemiz, işbu "Gizlilik Politikası" h&uuml;k&uuml;mlerini dilediği zaman sitede yayınlamak veya kullanıcılara elektronik posta g&ouml;ndermek veya sitesinde yayınlamak suretiyle değiştirebilir. Gizlilik Politikası h&uuml;k&uuml;mleri değiştiği takdirde, yayınlandığı tarihte y&uuml;r&uuml;rl&uuml;k kazanır.</div>


                    </div>
                </div>
            </div>


        </div>
    </div>

    </body>
@endsection
