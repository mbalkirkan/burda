@extends('layout')

@section('title')Kullanım Şartları @stop


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
                        <li class="list-group-item clearfix"><a href="{{route('eczane')}}"><i
                                    class="fa fa-medkit"></i> Nöbetçi Eczaneler</a></li>
                    </ul>
                </div>

                <!-- END SIDEBAR -->
                <div class="col-md-9 col-sm-9">
                    <h1>Kullanım Şartları</h1>
                    <div class="content-page">
                        <div>L&uuml;tfen sitemizi kullanmadan evvel bu &lsquo;site kullanım şartları&rsquo;nı dikkatlice okuyunuz.&nbsp;</div>
                        <div>Bu alışveriş sitesini kullanan ve alışveriş yapan m&uuml;şterilerimiz aşağıdaki şartları kabul etmiş varsayılmaktadır:</div>
                        <div>Sitemizdeki web sayfaları ve ona bağlı t&uuml;m sayfalar&nbsp;https://www.usakburda.com&nbsp;adresindekiUşak Burda&nbsp;malıdır ve onun tarafından işletilir. Sizler (&lsquo;Kullanıcı&rsquo;) sitede sunulan t&uuml;m hizmetleri kullanırken aşağıdaki şartlara tabi olduğunuzu, sitedeki hizmetten yararlanmakla ve kullanmaya devam etmekle; Bağlı olduğunuz yasalara g&ouml;re s&ouml;zleşme imzalama hakkına, yetkisine ve hukuki ehliyetine sahip ve 18 yaşın &uuml;zerinde olduğunuzu, bu s&ouml;zleşmeyi okuduğunuzu, anladığınızı ve s&ouml;zleşmede yazan şartlarla bağlı olduğunuzu kabul etmiş sayılırsınız.&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>İşbu s&ouml;zleşme taraflara s&ouml;zleşme konusu site ile ilgili hak ve y&uuml;k&uuml;ml&uuml;l&uuml;kler y&uuml;kler ve taraflar işbu s&ouml;zleşmeyi kabul ettiklerinde bahsi ge&ccedil;en hak ve y&uuml;k&uuml;ml&uuml;l&uuml;kleri eksiksiz, doğru, zamanında, işbu s&ouml;zleşmede talep edilen şartlar d&acirc;hilinde yerine getireceklerini beyan ederler.</div>
                        <div>&nbsp;</div>
                        <div>1. SORUMLULUKLAR</div>
                        <div>a.Firma, fiyatlar ve sunulan &uuml;r&uuml;n ve hizmetler &uuml;zerinde değişiklik yapma hakkını her zaman saklı tutar.&nbsp;</div>
                        <div>b.Firma, &uuml;yenin s&ouml;zleşme konusu hizmetlerden, teknik arızalar dışında yararlandırılacağını kabul ve taahh&uuml;t eder.</div>
                        <div>c.Kullanıcı, sitenin kullanımında tersine m&uuml;hendislik yapmayacağını ya da bunların kaynak kodunu bulmak veya elde etmek amacına y&ouml;nelik herhangi bir başka işlemde bulunmayacağını aksi halde ve 3. Kişiler nezdinde doğacak zararlardan sorumlu olacağını, hakkında hukuki ve cezai işlem yapılacağını peşinen kabul eder.&nbsp;</div>
                        <div>d.Kullanıcı, site i&ccedil;indeki faaliyetlerinde, sitenin herhangi bir b&ouml;l&uuml;m&uuml;nde veya iletişimlerinde genel ahlaka ve adaba aykırı, kanuna aykırı, 3. Kişilerin haklarını zedeleyen, yanıltıcı, saldırgan, m&uuml;stehcen, pornografik, kişilik haklarını zedeleyen, telif haklarına aykırı, yasa dışı faaliyetleri teşvik eden i&ccedil;erikler &uuml;retmeyeceğini, paylaşmayacağını kabul eder. Aksi halde oluşacak zarardan tamamen kendisi sorumludur ve bu durumda &lsquo;Site&rsquo; yetkilileri, bu t&uuml;r hesapları askıya alabilir, sona erdirebilir, yasal s&uuml;re&ccedil; başlatma hakkını saklı tutar. Bu sebeple yargı mercilerinden etkinlik veya kullanıcı hesapları ile ilgili bilgi talepleri gelirse paylaşma hakkını saklı tutar.</div>
                        <div>e.Sitenin &uuml;yelerinin birbirleri veya &uuml;&ccedil;&uuml;nc&uuml; şahıslarla olan ilişkileri kendi sorumluluğundadır.&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>2. &nbsp;Fikri M&uuml;lkiyet Hakları</div>
                        <div>&nbsp;</div>
                        <div>2.1. İşbu Site&rsquo;de yer alan &uuml;nvan, işletme adı, marka, patent, logo, tasarım, bilgi ve y&ouml;ntem gibi tescilli veya tescilsiz t&uuml;m fikri m&uuml;lkiyet hakları site işleteni ve sahibi firmaya veya belirtilen ilgilisine ait olup, ulusal ve uluslararası hukukun koruması altındadır. İşbu Site&rsquo;nin ziyaret edilmesi veya bu Site&rsquo;deki hizmetlerden yararlanılması s&ouml;z konusu fikri m&uuml;lkiyet hakları konusunda hi&ccedil;bir hak vermez.</div>
                        <div>2.2. Site&rsquo;de yer alan bilgiler hi&ccedil;bir şekilde &ccedil;oğaltılamaz, yayınlanamaz, kopyalanamaz, sunulamaz ve/veya aktarılamaz. Site&rsquo;nin b&uuml;t&uuml;n&uuml; veya bir kısmı diğer bir internet sitesinde izinsiz olarak kullanılamaz.&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>3. Gizli Bilgi</div>
                        <div>3.1. Firma, site &uuml;zerinden kullanıcıların ilettiği kişisel bilgileri 3. Kişilere a&ccedil;ıklamayacaktır. Bu kişisel bilgiler; kişi adı-soyadı, adresi, telefon numarası, cep telefonu, e-posta adresi gibi Kullanıcı&rsquo;yı tanımlamaya y&ouml;nelik her t&uuml;rl&uuml; diğer bilgiyi i&ccedil;ermekte olup, kısaca &lsquo;Gizli Bilgiler&rsquo; olarak anılacaktır.</div>
                        <div>&nbsp;</div>
                        <div>3.2. Kullanıcı, sadece tanıtım, reklam, kampanya, promosyon, duyuru vb. pazarlama faaliyetleri kapsamında kullanılması ile sınırlı olmak &uuml;zere, Site&rsquo;nin sahibi olan firmanın kendisine ait iletişim, portf&ouml;y durumu ve demografik bilgilerini iştirakleri ya da bağlı bulunduğu grup şirketleri ile paylaşmasına muvafakat ettiğini kabul ve beyan eder. Bu kişisel bilgiler firma b&uuml;nyesinde m&uuml;şteri profili belirlemek, m&uuml;şteri profiline uygun promosyon ve kampanyalar sunmak ve istatistiksel &ccedil;alışmalar yapmak amacıyla kullanılabilecektir.</div>
                        <div>&nbsp;</div>
                        <div>3.3. Gizli Bilgiler, ancak resmi makamlarca usul&uuml; dairesinde bu bilgilerin talep edilmesi halinde ve y&uuml;r&uuml;rl&uuml;kteki emredici mevzuat h&uuml;k&uuml;mleri gereğince resmi makamlara a&ccedil;ıklama yapılmasının zorunlu olduğu durumlarda resmi makamlara a&ccedil;ıklanabilecektir.</div>
                        <div>&nbsp;</div>
                        <div>4. Garanti Vermeme: İŞBU S&Ouml;ZLEŞME MADDESİ UYGULANABİLİR KANUNUN İZİN VERDİĞİ AZAMİ &Ouml;L&Ccedil;&Uuml;DE GE&Ccedil;ERLİ OLACAKTIR. FİRMA TARAFINDAN SUNULAN HİZMETLER "OLDUĞU GİBİ&rdquo; VE "M&Uuml;MK&Uuml;N OLDUĞU&rdquo; TEMELDE SUNULMAKTA VE PAZARLANABİLİRLİK, BELİRLİ BİR AMACA UYGUNLUK VEYA İHLAL ETMEME KONUSUNDA T&Uuml;M ZIMNİ GARANTİLER DE D&Acirc;HİL OLMAK &Uuml;ZERE HİZMETLER VEYA UYGULAMA İLE İLGİLİ OLARAK (BUNLARDA YER ALAN T&Uuml;M BİLGİLER D&Acirc;HİL) SARİH VEYA ZIMNİ, KANUNİ VEYA BAŞKA BİR NİTELİKTE Hİ&Ccedil;BİR GARANTİDE BULUNMAMAKTADIR.&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>5. Kayıt ve G&uuml;venlik&nbsp;</div>
                        <div>Kullanıcı, doğru, eksiksiz ve g&uuml;ncel kayıt bilgilerini vermek zorundadır. Aksi halde bu S&ouml;zleşme ihlal edilmiş sayılacak ve Kullanıcı bilgilendirilmeksizin hesap kapatılabilecektir.</div>
                        <div>Kullanıcı, site ve &uuml;&ccedil;&uuml;nc&uuml; taraf sitelerdeki şifre ve hesap g&uuml;venliğinden kendisi sorumludur. Aksi halde oluşacak veri kayıplarından ve g&uuml;venlik ihlallerinden veya donanım ve cihazların zarar g&ouml;rmesinden Firma sorumlu tutulamaz.</div>
                        <div>&nbsp;</div>
                        <div>
                            <div>5.1&nbsp;Kullanıcı, iş ilanı verirken paylaştığı bilgileri doğru bir şekilde vermek zorundadır. Ayrıca verdiği bilgilerin site &uuml;zerinde paylaşılmasını, site tarafından kullanılmasını da kabul etmiş sayılır.</div>
                        </div>
                        <div>&nbsp;</div>
                        <div>6. M&uuml;cbir Sebep</div>
                        <div>&nbsp;</div>
                        <div>Tarafların kontrol&uuml;nde olmayan; tabii afetler, yangın, patlamalar, i&ccedil; savaşlar, savaşlar, ayaklanmalar, halk hareketleri, seferberlik ilanı, grev, lokavt ve salgın hastalıklar, altyapı ve internet arızaları, elektrik kesintisi gibi sebeplerden (aşağıda birlikte "M&uuml;cbir Sebep&rdquo; olarak anılacaktır.) dolayı s&ouml;zleşmeden doğan y&uuml;k&uuml;ml&uuml;l&uuml;kler taraflarca ifa edilemez hale gelirse, taraflar bundan sorumlu değildir. Bu s&uuml;rede Taraflar&rsquo;ın işbu S&ouml;zleşme&rsquo;den doğan hak ve y&uuml;k&uuml;ml&uuml;l&uuml;kleri askıya alınır.&nbsp;</div>
                        <div>&nbsp;</div>
                        <div>7. S&ouml;zleşmenin B&uuml;t&uuml;nl&uuml;ğ&uuml; ve Uygulanabilirlik</div>
                        <div>&nbsp;</div>
                        <div>İşbu s&ouml;zleşme şartlarından biri, kısmen veya tamamen ge&ccedil;ersiz hale gelirse, s&ouml;zleşmenin geri kalanı ge&ccedil;erliliğini korumaya devam eder.</div>
                        <div>&nbsp;</div>
                        <div>8. S&ouml;zleşmede Yapılacak Değişiklikler</div>
                        <div>&nbsp;</div>
                        <div>Firma, dilediği zaman sitede sunulan hizmetleri ve işbu s&ouml;zleşme şartlarını kısmen veya tamamen değiştirebilir. Değişiklikler sitede yayınlandığı tarihten itibaren ge&ccedil;erli olacaktır. Değişiklikleri takip etmek Kullanıcı&rsquo;nın sorumluluğundadır. Kullanıcı, sunulan hizmetlerden yararlanmaya devam etmekle bu değişiklikleri de kabul etmiş sayılır.</div>
                        <div>&nbsp;</div>
                        <div>9. Tebligat</div>
                        <div>İşbu S&ouml;zleşme ile ilgili taraflara g&ouml;nderilecek olan t&uuml;m bildirimler, Firma&rsquo;nın bilinen e.posta adresi ve kullanıcının &uuml;yelik formunda belirttiği e.posta adresi vasıtasıyla yapılacaktır. Kullanıcı, &uuml;ye olurken belirttiği adresin ge&ccedil;erli tebligat adresi olduğunu, değişmesi durumunda 5 g&uuml;n i&ccedil;inde yazılı olarak diğer tarafa bildireceğini, aksi halde bu adrese yapılacak tebligatların ge&ccedil;erli sayılacağını kabul eder.</div>
                        <div>&nbsp;</div>
                        <div>10. Delil S&ouml;zleşmesi</div>
                        <div>Taraflar arasında işbu s&ouml;zleşme ile ilgili işlemler i&ccedil;in &ccedil;ıkabilecek her t&uuml;rl&uuml; uyuşmazlıklarda Taraflar&rsquo;ın defter, kayıt ve belgeleri ile ve bilgisayar kayıtları ve faks kayıtları 6100 sayılı Hukuk Muhakemeleri Kanunu uyarınca delil olarak kabul edilecek olup, kullanıcı bu kayıtlara itiraz etmeyeceğini kabul eder.</div>
                        <div>&nbsp;</div>
                        <div>11. Uyuşmazlıkların &Ccedil;&ouml;z&uuml;m&uuml;</div>
                        <div>İşbu S&ouml;zleşme&rsquo;nin uygulanmasından veya yorumlanmasından doğacak her t&uuml;rl&uuml; uyuşmazlığın &ccedil;&ouml;z&uuml;m&uuml;nde İstanbul (Merkez) Adliyesi Mahkemeleri ve İcra Daireleri yetkilidir.</div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    </body>
@endsection
