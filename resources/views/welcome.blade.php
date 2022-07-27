<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />

    <title>{{ env('APP_NAME') }}</title>
    <link rel="canonical" href="https://cikalahang.com/" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Home - Cikalahang Official Website" />
	<meta property="og:url" content="https://cikalahang.com/" />
	<meta property="og:site_name" content="Cikalahang Official Website" />
    <link rel="shortcut icon" href="{{ asset('front/images/fav.jpg') }}" />


    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />


    <link rel='stylesheet' href='{{ asset('') }}/front/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/superfish/css/superfish.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/dl-menu/component.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/font-awesome-new/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/elegant-font/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/fancybox/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/flexslider/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/css/style-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/css/style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/masterslider/public/assets/css/masterslider.main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/css/master-custom.css' type='text/css' media='all' />


</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
            <!-- top navigation -->
            <div class="top-navigation-wrapper">
                <div class="top-navigation-container container">
                    <div class="top-navigation-left">
                        <div class="top-navigation-left-text">
                            Phone : {{ env('DESA_PHONE') }}      Email : {{ env("DESA_EMAIL") }} </div>
                    </div>
                    <div class="top-navigation-right">
                        <div class="top-social-wrapper">
                            <div class="social-icon">
                                <a href="{{ env('DESA_IG') }}" target="_blank">
                                    <i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="greennature-header-substitute"></div>
            <div class="greennature-header-inner header-inner-header-style-5">
                <div class="greennature-header-container container">
                    <div class="greennature-header-inner-overlay"></div>
                    <!-- logo -->
                    <div class="greennature-logo">
                        <div class="greennature-logo-inner">
                            <a href="index-2.html">
                                <img src="{{ asset('') }}/front/images/logo.png" alt="" /> </a>
                        </div>
                        <div class="greennature-responsive-navigation dl-menuwrapper" id="greennature-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>
                            <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item page_item page-item-5680 current_page_item"><a href="index-2.html" aria-current="page">Home</a></li>
                                <li class="menu-item menu-item-has-children menu-item-15"><a href="#">Pages</a>
                                    <ul class="dl-submenu">
                                        <li class="menu-item"><a href="act-now.html">Act Now</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="greennature-navigation-wrapper">
                        <nav class="greennature-navigation" id="greennature-main-navigation">
                            <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                <li class="menu-item menu-item-home current-menu-item greennature-normal-menu"><a href="index-2.html"><i class="fa fa-home"></i>Beranda</a></li>
                                <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="#" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Profil</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="act-now.html">Sejarah</a></li>
                                        <li class="menu-item"><a href="act-now.html">Visi & Misi</a></li>
                                        <li class="menu-item"><a href="act-now.html">Program Kerja</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="#" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Media</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="act-now.html">Berita</a></li>
                                        <li class="menu-item"><a href="act-now.html">Galeri</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children greennature-normal-menu"><a href="#" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Layanan</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="act-now.html">Kotak Saran</a></li>
                                        <li class="menu-item"><a href="act-now.html">Pengaduan</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <a class="greennature-donate-button greennature-lb-payment"><span class="greennature-button-overlay"></span><span class="greennature-button-donate-text">Login</span></a>

                        </nav>
                        <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <section id="content-section-1">
                        <div class="greennature-full-size-wrapper gdlr-show-all no-skin" style="padding-bottom: 0px;  background-color: #ffffff; ">
                            <div class="greennature-master-slider-item greennature-slider-item greennature-item" style="margin-bottom: 0px;">
                                <!-- MasterSlider -->
                                <div id="P_slider_1" class="master-slider-parent ms-parent-id-1">

                                    <!-- MasterSlider Main -->
                                    <div id="slider_1" class="master-slider ms-skin-default">

                                        <div class="ms-slide" data-delay="7" data-fill-mode="fill">
                                            <img src="{{ asset('') }}/front/plugins/masterslider/public/assets/css/blank.gif" alt="" title="" data-src="{{ asset('') }}/front/images/slider/sl-1.jpg" />

                                            <a href="#" target="_self" class="ms-layer ms-btn ms-btn-round ms-btn-n msp-preset-btn-159" data-effect="t(true,n,n,-500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="400" data-delay="987" data-ease="easeOutQuint" data-type="button" data-offset-x="1" data-offset-y="208" data-origin="ml" data-position="normal">Desa Cikalahang</a>

                                            <div class="ms-layer  msp-cn-1-3" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="437" data-delay="625" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="105" data-origin="ml" data-position="normal">
                                                Untuk Bumi</div>

                                            <div class="ms-layer  msp-cn-1-2" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="425" data-delay="325" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-5" data-origin="ml" data-position="normal">
                                                Berbudidaya</div>

                                            <div class="ms-layer  msp-cn-1-1" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="350" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-100" data-origin="ml" data-position="normal">
                                                Bersama</div>

                                        </div>
                                        <div class="ms-slide" data-delay="7" data-fill-mode="fill">
                                            <img src="{{ asset('') }}/front/plugins/masterslider/public/assets/css/blank.gif" alt="" title="" data-src="{{ asset('') }}/front/upload/slider-3.jpg" />

                                            <div class="ms-layer  msp-cn-1-10" style="" data-effect="t(true,n,n,-500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="425" data-delay="425" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="82" data-origin="mc" data-position="normal">
                                                The Better Place</div>

                                            <div class="ms-layer  msp-cn-1-13" style="" data-effect="t(true,n,n,500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="437" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-15" data-origin="mc" data-position="normal">
                                                Make This World</div>

                                        </div>

                                    </div>
                                    <!-- END MasterSlider Main -->

                                </div>
                                <!-- END MasterSlider -->


                            </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-2">
                        <div class="greennature-color-wrapper  gdlr-show-all greennature-skin-brown-column-service" style="background-color: #2d2418;  border-top: 5px solid #3f3221; padding-top: 0px; padding-bottom: 0px; ">
                            <div class="container">
                                <div class="four columns">
                                    <div class="greennature-ux column-service-ux">
                                        <div class="greennature-item greennature-column-service-item greennature-type-2" style="margin-bottom: 0px;">
                                            <div class="column-service-image"><img src="{{ asset('') }}/front/upload/icon-service-1.png" alt="" width="80" height="80" /></div>
                                            <div class="column-service-content-wrapper">
                                                <h3 class="column-service-title">Alam Hijau</h3>
                                                <div class="column-service-content greennature-skin-content">
                                                    <p>Pada zaman dahulu desa Cikalahang merupakan hutan yang sangat lebat, orang-orangpun mendatangi lahan tersebut untuk menjadikan tempat tinggal. semakin lama semakin banyak orang yang bertempat tinggal di lahan tersebut. Hingga lahan tersebut menjadi ramai dan dinamakan sebagi desa Sudi Mampir</p>
                                                </div><a class="column-service-read-more" href="#">Learn More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="greennature-ux column-service-ux">
                                        <div class="greennature-item greennature-column-service-item greennature-type-2-bg" style="margin-bottom: 0px;background-color: #3f3221;">
                                            <div class="column-service-image"><img src="{{ asset('') }}/front/upload/icon-service-2.png" alt="" width="80" height="80" /></div>
                                            <div class="column-service-content-wrapper">
                                                <h3 class="column-service-title">Air Yang Bersih</h3>
                                                <div class="column-service-content greennature-skin-content">
                                                    <p>Desa Cikalahang terletak di dekat kaki gunung Ciremai, membuatnya memiliki kualitas air yang sangat baik dan kaya akan mineral. Hingga pada akhirnya orang-orang lebih mengenal desa Sudi Mampir dengan sebutan desa Cikalahang yang artinya Ci= cai/air, Lahang= hambar/ tak berasa</p>
                                                </div><a class="column-service-read-more" href="#">Learn More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="greennature-ux column-service-ux">
                                        <div class="greennature-item greennature-column-service-item greennature-type-2" style="margin-bottom: 0px;">
                                            <div class="column-service-image"><img src="{{ asset('') }}/front/upload/icon-service-3.png" alt="" width="80" height="80" /></div>
                                            <div class="column-service-content-wrapper">
                                                <h3 class="column-service-title">Budidaya</h3>
                                                <div class="column-service-content greennature-skin-content">
                                                    <p>Saat ini Desa Cikalahang lebih dominan dengan budidaya mereka dengan air, yaitu Budidaya Ikan. Tidak lupa juga, Desa Cikalahang memiliki obyek wisata Air (Telaga Pejaten, Hegar, dll). Maka dari itu, Bagi para penikmat kuliner sepanjang jalan menuju tempat wisata banyak dijumpai rumah makan terutama ikan bakar dengan cita rasa yang tinggi dengan harga yang kompetitif.</p>
                                                </div><a class="column-service-read-more" href="#">Learn More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-3">
                        <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all no-skin" id="greennature-parallax-wrapper-1" data-bgspeed="0.11" style="background-image: url('{{ asset('') }}/front/upload/donation-bg.jpg'); padding-top: 90px; padding-bottom: 65px; ">
                            <div class="container">
                                <div class="six columns">
                                    <div class="greennature-item greennature-action-ads-item" style="background: url('{{ asset('') }}/front/upload/donation-bg-2.jpg'); ">
                                        <h3 class="action-ads-title" style="color: #5dc269;">Kotak Saran</h3>
                                        <div class="action-ads-caption greennature-skin-info">Suaramu demi kebaikan Kami</div>
                                        <div class="action-ads-divider" style="background: #5dc269;"></div>
                                        <div class="action-ads-content">
                                            <p>Kami menerima saran dan kritik yang membangun sehingga dapat dijadikan sebuah patokan benchmark untuk Desa Cikalahang terus lebih baik lagi.</p>
                                            <a class="action-ads-button large greennature-button" style="color: #ffffff;background-color: #5dc269;" href="#">Kotak Saran</a></div>
                                    </div>
                                </div>
                                <div class="six columns">
                                    <div class="greennature-item greennature-action-ads-item" style="background: url('{{ asset('') }}/front/upload/donation-bg-1.jpg'); ">
                                        <h3 class="action-ads-title" style="color: #facc2e;">Pengaduan</h3>
                                        <div class="action-ads-caption greennature-skin-info">Laporkan kepada Kami</div>
                                        <div class="action-ads-divider" style="background: #facc2e;"></div>
                                        <div class="action-ads-content">
                                            <p>Laporkan pelanggaran-pelanggaran yang terjadi di desa Cikalahang. Perangkat Desa akan menegakkan disiplin dan ketertiban di lingkungan Desa Cikalahang.</p>
                                            <a class="action-ads-button large greennature-button greennature-lb-payment" href="#" style="color: #6d5b1c;background-color: #fec428;">Pengaduan</a></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-4">
                        <div class="greennature-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-bottom: 25px; ">
                            <div class="container">
                                <div class="greennature-item-title-wrapper greennature-item  greennature-left-divider greennature-medium ">
                                    <div class="greennature-item-title-container container">
                                        <div class="greennature-item-title-head">
                                            <h3 class="greennature-item-title greennature-skin-title greennature-skin-border"><img src="{{ asset('') }}/front/upload/icon-5.png" alt="" width="80" height="80" />Berita Cikalahang</h3><a class="greennature-item-title-link" href="#">Lebih Banyak</a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio-item-wrapper type-classic-portfolio" >
                                    <div class="portfolio-item-holder  greennature-portfolio-column-4">
                                        <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                                            <div class="clear"></div>
                                            <div class="three columns">
                                                <div class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                                    <div class="greennature-ux greennature-classic-portfolio-ux">
                                                        <div class="portfolio-thumbnail greennature-image"><img src="{{ asset('') }}/front/upload/shutterstock_161515241-540x326.jpg" alt="" width="540" height="326" /><span class="portfolio-overlay">&nbsp;</span><a class="portfolio-overlay-icon" href="upload/shutterstock_161515241.jpg" data-rel="fancybox"><span class="portfolio-icon" ><i class="fa fa-search" ></i></span></a></div>
                                                        <div class="portfolio-classic-content">
                                                            <h3 class="portfolio-title"><a  href="#"  >Wind Energy</a></h3>
                                                            <div class="greennature-portfolio-info">
                                                                <div class="portfolio-info portfolio-tag"><span class="info-head greennature-title">Tags </span><a href="#" rel="tag">Environment</a><span class="sep">,</span> <a href="#" rel="tag">Renewable Energy</a></div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua....
                                                                <div class="clear"></div><a href="#" class="excerpt-read-more">Read More</a></div><a class="portfolio-classic-learn-more" href="#">Learn More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="three columns">
                                                <div class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                                    <div class="greennature-ux greennature-classic-portfolio-ux">
                                                        <div class="portfolio-thumbnail greennature-image"><img src="{{ asset('') }}/front/upload/shutterstock_133689230-540x326.jpg" alt="" width="540" height="326" /><span class="portfolio-overlay">&nbsp;</span><a class="portfolio-overlay-icon" href="#"><span class="portfolio-icon" ><i class="fa fa-link" ></i></span></a></div>
                                                        <div class="portfolio-classic-content">
                                                            <h3 class="portfolio-title"><a  href="#"  >Elephant Sanctuary</a></h3>
                                                            <div class="greennature-portfolio-info">
                                                                <div class="portfolio-info portfolio-tag"><span class="info-head greennature-title">Tags </span><a href="#" rel="tag">African</a><span class="sep">,</span> <a href="#" rel="tag">Animals</a></div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua....
                                                                <div class="clear"></div><a href="#" class="excerpt-read-more">Read More</a></div><a class="portfolio-classic-learn-more" href="#">Learn More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="three columns">
                                                <div class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                                    <div class="greennature-ux greennature-classic-portfolio-ux">
                                                        <div class="portfolio-thumbnail greennature-image"><img src="{{ asset('') }}/front/upload/shutterstock_53600221-540x326.jpg" alt="" width="540" height="326" /><span class="portfolio-overlay">&nbsp;</span><a class="portfolio-overlay-icon" href="https://vimeo.com/101707505" data-rel="fancybox" data-fancybox-type="iframe"><span class="portfolio-icon" ><i class="fa fa-film" ></i></span></a></div>
                                                        <div class="portfolio-classic-content">
                                                            <h3 class="portfolio-title"><a  href="#"  >Conservation Volunteer</a></h3>
                                                            <div class="greennature-portfolio-info">
                                                                <div class="portfolio-info portfolio-tag"><span class="info-head greennature-title">Tags </span><a href="#" rel="tag">Cleaning</a><span class="sep">,</span> <a href="#" rel="tag">Volunteer</a></div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua....
                                                                <div class="clear"></div><a href="#" class="excerpt-read-more">Read More</a></div><a class="portfolio-classic-learn-more" href="#">Learn More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="three columns">
                                                <div class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                                    <div class="greennature-ux greennature-classic-portfolio-ux">
                                                        <div class="portfolio-thumbnail greennature-image"><img src="{{ asset('') }}/front/upload/shutterstock_124871620-540x326.jpg" alt="" width="540" height="326" /><span class="portfolio-overlay">&nbsp;</span><a class="portfolio-overlay-icon" href="#"><span class="portfolio-icon" ><i class="fa fa-link" ></i></span></a></div>
                                                        <div class="portfolio-classic-content">
                                                            <h3 class="portfolio-title"><a  href="#"  >Engery Conservation</a></h3>
                                                            <div class="greennature-portfolio-info">
                                                                <div class="portfolio-info portfolio-tag"><span class="info-head greennature-title">Tags </span><a href="#" rel="tag">Animals</a><span class="sep">,</span> <a href="#" rel="tag">Volunteer</a></div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="portfolio-excerpt">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua....
                                                                <div class="clear"></div><a href="#" class="excerpt-read-more">Read More</a></div><a class="portfolio-classic-learn-more" href="#">Learn More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                    <section id="content-section-5">
                        <div class="greennature-color-wrapper  gdlr-show-all greennature-skin-service-half greennature-half-bg-wrapper" style="background-color: #f5f5f5; padding-bottom: 20px; ">
                            <div class="greennature-half-bg greennature-bg-solid" style="background-image: url({{ asset('') }}/front/images/slider/slider-3.jpg);"></div>
                            <div class="container">
                                <div class="six columns">
                                    <div class="greennature-item greennature-content-item"></div>
                                </div>
                                <div class="six columns">
                                    <div class="greennature-item greennature-icon-with-list-item">
                                        <div class="list-with-icon-ux greennature-ux">
                                            <div class="list-with-icon greennature-left">
                                                <div class="list-with-icon-image"><img src="{{ asset('') }}/front/upload/icon-1.png" alt="" width="80" height="80" /></div>
                                                <div class="list-with-icon-content">
                                                    <div class="list-with-icon-title greennature-skin-title">Visi</div>
                                                    <div class="list-with-icon-caption">
                                                        <p>Terbangunnya Tata Kelola Pemerintahan Desa yang baik dan bersih guna terwujudnya kehidupan masyarakat desa yang adil, makmur dan sejahtera serta berbudaya dan berakhlaq mulia.</p>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="list-with-icon-ux greennature-ux">
                                            <div class="list-with-icon greennature-left">
                                                <div class="list-with-icon-image"><img src="{{ asset('') }}/front/upload/icon-2.png" alt="" width="80" height="80" /></div>
                                                <div class="list-with-icon-content">
                                                    <div class="list-with-icon-title greennature-skin-title">Misi</div>
                                                    <div class="list-with-icon-caption">
                                                        <ul>
                                                            <li>Meningkatkan tata pemerintahan yang demokratis, trasparan, akuntabel, efisien dan efektif</li>
                                                            <li>Meningkatkan perekonomian pedesaan yang memiliki daya saing berbasis pada BUMDes dan Teknologi, baik pertanian, perikanan, perkebunan dan home industry</li>
                                                            <li>Meningkatkan sumber daya manusia yang sehat (kesehatan), cerdas (Pendidikan), agamis (Keagamaan), dan bermoral (Budaya)</li>
                                                            <li>Meningkatkan pembangunan ifrastruktur pedesaan yang terarah dan berkualitas</li>
                                                            <li>Meningkatkan Peran Kelembagaan dan Masyarakat Desa dalam mendorong pembangunan Desa</li>
                                                            <li>Meningkatkan system keamanan lingkungan masyarakat desa</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>

                    <section id="content-section-9">
                        <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all greennature-skin-dark-skin" id="greennature-parallax-wrapper-3" data-bgspeed="0.15" style="background-image: url('{{ asset('') }}/front/upload/service-bg-2.jpg'); padding-top: 135px; padding-bottom: 80px; ">
                            <div class="container">
                                <div class="three columns">
                                    <div class="greennature-skill-item-wrapper greennature-skin-content greennature-item greennature-style-2" style="margin-bottom: 70px;"><img src="{{ asset('') }}/front/upload/icon-4.png" alt="" width="80" height="80" />
                                        <div class="greennature-skill-item-title" style="color: #5dc269;">2,000,000</div>
                                        <div class="greennature-skill-item-caption" style="color: #ffffff;">Penduduk</div>
                                    </div>
                                </div>
                                <div class="three columns">
                                    <div class="greennature-skill-item-wrapper greennature-skin-content greennature-item greennature-style-2" style="margin-bottom: 70px;"><img src="{{ asset('') }}/front/upload/icon-5.png" alt="" width="80" height="80" />
                                        <div class="greennature-skill-item-title" style="color: #5dc269;">5</div>
                                        <div class="greennature-skill-item-caption" style="color: #ffffff;">Obyek Wisata Alam</div>
                                    </div>
                                </div>
                                <div class="three columns">
                                    <div class="greennature-skill-item-wrapper greennature-skin-content greennature-item greennature-style-2" style="margin-bottom: 70px;"><img src="{{ asset('') }}/front/upload/icon-1.png" alt="" width="80" height="80" />
                                        <div class="greennature-skill-item-title" style="color: #5dc269;">3</div>
                                        <div class="greennature-skill-item-caption" style="color: #ffffff;">Masjid Desa</div>
                                    </div>
                                </div>
                                <div class="three columns">
                                    <div class="greennature-skill-item-wrapper greennature-skin-content greennature-item greennature-style-2" style="margin-bottom: 70px;"><img src="{{ asset('') }}/front/upload/icon-2.png" alt="" width="80" height="80" />
                                        <div class="greennature-skill-item-title" style="color: #5dc269;">7</div>
                                        <div class="greennature-skill-item-caption" style="color: #ffffff;">Wisata Kuliner</div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                                <div class="greennature-item greennature-divider-item" style="margin-bottom: 60px;">
                                    <div class="greennature-divider thick"></div>
                                </div>
                                <div class="clear"></div>
                                <div class="greennature-stunning-item-ux greennature-ux">
                                    <div class="greennature-item greennature-stunning-item greennature-stunning-center">
                                        <h2 class="stunning-item-title">The only way to make this happened is to take action!</h2>
                                        <div class="stunning-item-caption greennature-skin-content">
                                            <p>Praesent commodo cursus magna, vel scelerisque nislet.</p>
                                        </div><a class="stunning-item-button greennature-button large greennature-lb-payment" href="#" style="background-color: #ecb338; color: #ffffff;">Donate Now!</a><a class="stunning-item-button greennature-button large" href="#">Act Now!</a></div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                </div>
                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->

        <footer class="footer-wrapper">
            <div class="footer-container container">
                <div class="footer-column three columns" id="footer-widget-1">
                    <div id="text-5" class="widget widget_text greennature-item greennature-widget">
                        <div class="textwidget">
                            <p><img src="{{ asset('') }}/front/upload/logo-light.png" style="width: 170px;" alt="" /></p>
                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta. Etiam porta sem malesuada magna mollis euismod.</p>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-2">
                    <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Contact Info</h3>
                        <div class="clear"></div>
                        <div class="textwidget"><span class="clear"></span><span class="greennature-space" style="margin-top: -6px; display: block;"></span> Address: 184 Main Collins Street West Victoria 8007

                            <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                            <i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> +1800-222-3333

                            <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                            <i class="greennature-icon fa fa-mobile" style="vertical-align: middle; color: #fff; font-size: 20px; "></i> +1833-232-3443

                            <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                            <i class="greennature-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> contact@yourdomain.com</div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-3">
                    <div id="gdlr-recent-post-widget-5" class="widget widget_gdlr-recent-post-widget greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Recent Posts</h3>
                        <div class="clear"></div>
                        <div class="greennature-recent-post-widget">
                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail">
                                    <a href="#"><img src="{{ asset('') }}/front/upload/shutterstock_294481373-150x150.jpg" alt="" width="150" height="150" /></a>
                                </div>
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title"><a href="#">Sem Porta Mollis Parturi</a></div>
                                    <div class="recent-post-widget-info">
                                        <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">21 Mar 2014</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail">
                                    <a href="#"><img src="{{ asset('') }}/front/upload/shutterstock_181393724-150x150.jpg" alt="" width="150" height="150" /></a>
                                </div>
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title"><a href="#">Nullam Lorem Mattis Purus</a></div>
                                    <div class="recent-post-widget-info">
                                        <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">21 Mar 2014</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-4">
                    <div id="gdlr-recent-portfolio2-widget-6" class="widget widget_gdlr-recent-portfolio2-widget greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Recent Works</h3>
                        <div class="clear"></div>
                        <div class="greennature-recent-port2-widget">
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="{{ asset('') }}/front/upload/shutterstock_161515241-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="{{ asset('') }}/front/upload/shutterstock_133689230-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="{{ asset('') }}/front/upload/shutterstock_53600221-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="{{ asset('') }}/front/upload/shutterstock_124871620-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="{{ asset('') }}/front/upload/shutterstock_281995004-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="{{ asset('') }}/front/upload/shutterstock_256181956-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="copyright-wrapper">
                <div class="copyright-container container">
                    <div class="copyright-left">
                        <a href="#"><i class="greennature-icon fa fa-facebook" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-twitter" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-dribbble" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-pinterest" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-google-plus" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-instagram" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                    </div>
                    <div class="copyright-right">
                       <a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>

        <div class="greennature-payment-lightbox-overlay" id="greennature-payment-lightbox-overlay"></div>
        <div class="greennature-payment-lightbox-container" id="greennature-payment-lightbox-container">
            <div class="greennature-payment-lightbox-inner">
                <form class="greennature-payment-form" id="greennature-payment-form" >
                    <h3 class="greennature-payment-lightbox-title">
				<span class="greennature-head">You are donating to :</span>
				<span class="greennature-tail">Greennature Foundation</span>
			</h3>

                    <div class="greennature-payment-amount">
                        <div class="greennature-payment-amount-head">How much would you like to donate?</div>
                        <a class="greennature-payment-price-preset greennature-active" data-val="10">$10</a>
                        <a class="greennature-payment-price-preset" data-val="20">$20</a>
                        <a class="greennature-payment-price-preset" data-val="30">$30</a>
                        <input class="greennature-payment-price-fill" type="text" placeholder="Or Your Amount(USD)" />
                        <input class="greennature-payment-price" type="hidden" name="amount" value="10" />

                        <input class="greennature-payment-price" type="hidden" name="a3" value="10">
                    </div>

                    <div class="greennature-paypal-attribute">
                        <span class="greennature-head">Would you like to make regular donations?</span>
                        <span class="greennature-subhead">I would like to make </span>
                        <select name="t3" class="greennature-recurring-option">
                            <option value="0">one time</option>
                            <option value="W">weekly</option>
                            <option value="M">monthly</option>
                            <option value="Y">yearly</option>
                        </select>
                        <span class="greennature-subhead">donation(s)</span>
                        <input type="hidden" name="p3" value="1" />
                        <div class="greennature-recurring-time-wrapper">
                            <span class="greennature-subhead">How many times would you like this to recur? (including this payment) *</span>
                            <select name="srt" class="greennature-recurring-option">
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="bn" value="PP-BuyNowBF">
                        <input type="hidden" name="src" value="1">
                        <input type="hidden" name="sra" value="1">
                    </div>

                    <div class="greennature-form-fields">
                        <div class="six columns">
                            <div class="columns-wrap greennature-left">
                                <span class="greennature-head">Name *</span>
                                <input class="greennature-require" type="text" name="name">
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-right">
                                <span class="greennature-head">Last Name *</span>
                                <input class="greennature-require" type="text" name="last-name">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-left">
                                <span class="greennature-head">Email *</span>
                                <input class="greennature-require greennature-email" type="text" name="email">
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-right">
                                <span class="greennature-head">Phone</span>
                                <input type="text" name="phone">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-left">
                                <span class="greennature-head">Address</span>
                                <textarea name="address"></textarea>
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-right">
                                <span class="greennature-head">Additional Note</span>
                                <textarea name="additional-note"></textarea>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="greennature-payment-method">
                        <img class="greennature-active" src="{{ asset('') }}/front/images/paypal.png" alt="paypal" /><img src="{{ asset('') }}/front/images/stripe.png" alt="stripe" />
                        <input type="hidden" name="payment-method" value="paypal" /> </div>
                    <div class="greennature-message"></div>
                    <div class="greennature-loading">Loading...</div>
                    <input type="submit" value="Donate Now" />
                </form>
            </div>
        </div>
    </div>
    <!-- body-wrapper -->

    <script type='text/javascript' src='{{ asset('') }}/front/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/js/jquery/jquery-migrate.min.js'></script>
    <script>
        var ms_grabbing_curosr = 'plugins/masterslider/public/assets/css/common/grabbing.html',
            ms_grab_curosr = 'plugins/masterslider/public/assets/css/common/grab.html';
    </script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/superfish/js/superfish.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/js/hoverIntent.min.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/dl-menu/modernizr.custom.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/dl-menu/jquery.dlmenu.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/jquery.easing.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/fancybox/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/flexslider/jquery.flexslider.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/js/plugins.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/masterslider/public/assets/js/masterslider.min.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/jquery.transit.min.js'></script>
    <script type='text/javascript' src='{{ asset('') }}/front/plugins/gdlr-portfolio/gdlr-portfolio-script.js'></script>




    <script>
    (function ( $ ) {
        "use strict";

        $(function () {
            var masterslider_d1da = new MasterSlider();

            // slider controls
			masterslider_d1da.control('arrows'     ,{ autohide:true, overVideo:true  });
			masterslider_d1da.control('bullets'    ,{ autohide:false, overVideo:true, dir:'h', align:'bottom', space:6 , margin:25  });
            // slider setup
            masterslider_d1da.setup("slider_1", {
				width           : 1140,
				height          : 800,
				minHeight       : 0,
				space           : 0,
				start           : 1,
				grabCursor      : false,
				swipe           : true,
				mouse           : false,
				keyboard        : true,
				layout          : "fullwidth",
				wheel           : false,
				autoplay        : false,
                instantStartLayers:false,
				mobileBGVideo:false,
				loop            : true,
				shuffle         : false,
				preload         : 0,
				heightLimit     : true,
				autoHeight      : false,
				smoothHeight    : true,
				endPause        : false,
				overPause       : true,
				fillMode        : "fill",
				centerControls  : true,
				startOnAppear   : false,
				layersMode      : "center",
				autofillTarget  : "",
				hideLayers      : false,
				fullscreenMargin: 0,
				speed           : 20,
				dir             : "h",
				parallaxMode    : 'swipe',
				view            : "basic"
            });



            $("head").append( "<link rel='stylesheet' id='ms-fonts'  href='http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular' type='text/css' media='all' />" );

            window.masterslider_instances = window.masterslider_instances || {};
            window.masterslider_instances["5_d1da"] = masterslider_d1da;
         });

    })(jQuery);
    </script>
</body>

<!--  16:08 GMT -->
</html>
