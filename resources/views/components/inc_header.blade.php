<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />

    <title>{{ env('APP_NAME') }}</title>
    <link rel="canonical" href="https://cikalahang.com/" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    @if (isset($meta_seo) && $meta_seo != null)
        <meta property="og:title" content="META TITLEs" />
        <meta property="og:url" content="META LINK" />
        <meta property="og:site_name" content="META SITENAME" />
    @else
        <meta property="og:title" content="Home - Cikalahang Official Website" />
        <meta property="og:url" content="https://cikalahang.com/" />
        <meta property="og:site_name" content="Cikalahang Official Website" />
    @endif
    <link rel="shortcut icon" href="{{ asset('front/images/favdesa.png') }}" />


    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;'
        type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;'
        type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;'
        type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;'
        type='text/css' media='all' />


    <link rel='stylesheet' href='{{ asset('') }}/front/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/superfish/css/superfish.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/dl-menu/component.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/font-awesome-new/css/font-awesome.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/elegant-font/style.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/fancybox/jquery.fancybox.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/plugins/flexslider/flexslider.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/css/style-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/css/style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet'
        href='{{ asset('') }}/front/plugins/masterslider/public/assets/css/masterslider.main.css' type='text/css'
        media='all' />
    <link rel='stylesheet' href='{{ asset('') }}/front/css/master-custom.css' type='text/css' media='all' />


</head>

<body data-rsssl=1
    class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
            <!-- top navigation -->
            <div class="top-navigation-wrapper">
                <div class="top-navigation-container container">
                    <div class="top-navigation-left">
                        <div class="top-navigation-left-text">
                            Phone : {{ env('DESA_PHONE') }}      Email : {{ env('DESA_EMAIL') }} </div>
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
            @php
            $menu = \App\Models\Menu::where('visible', 1)
                ->orderBy('urutan', 'ASC')
                ->get();
            @endphp
            <div class="greennature-header-inner header-inner-header-style-5">
                <div class="greennature-header-container container">
                    <div class="greennature-header-inner-overlay"></div>
                    <!-- logo -->
                    <div class="greennature-logo">
                        <div class="greennature-logo-inner">
                            <a href="index-2.html">
                                <img src="{{ asset('') }}/front/images/logo.png" alt="" /> </a>
                        </div>
                        <div class="greennature-responsive-navigation dl-menuwrapper"
                            id="greennature-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>
                            <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
                                @foreach ($menu as $item)
                                    @if ($item->sub_menu->count() > 0)
                                        {{-- has sub menu --}}
                                        <li class="menu-item menu-item-has-children menu-item-15"><a href="#">{{ $item->nama }}</a>
                                            <ul class="dl-submenu">
                                                @foreach ($item->sub_menu as $sub)
                                                    <li class="menu-item"><a href="{{ $sub->get_link() }}">{{ $sub->nama }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li class="menu-item menu-item-home current-menu-item page_item page-item-5680 current_page_item">
                                            <a href="{{ $item->link }}" aria-current="page">{{ $item->nama }}</a></li>
                                    @endif
                                @endforeach


                            </ul>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="greennature-navigation-wrapper">
                        <nav class="greennature-navigation" id="greennature-main-navigation">
                            <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                <li class="menu-item menu-item-home current-menu-item greennature-normal-menu"><a
                                        href="{{ route('welcome') }}"><i class="fa fa-home"></i>Beranda</a></li>

                                @foreach ($menu as $item)
                                    @if ($item->sub_menu->count() > 0)
                                        {{-- has sub menu --}}
                                        <li class="menu-item menu-item-has-children greennature-normal-menu"><a
                                                href="#" class="sf-with-ul-pre"><i
                                                    class="fa fa-file-text-o"></i>{{ $item->nama }}</a>
                                            <ul class="sub-menu">
                                                @foreach ($item->sub_menu as $sub)
                                                    <li class="menu-item"><a
                                                            href="{{ $sub->get_link() }}">{{ $sub->nama }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        {{-- single menu --}}
                                        <li class="menu-item menu-item-home greennature-normal-menu"><a
                                                href="{{ $item->link }}"><i
                                                    class="fa fa-file-text-o"></i>{{ $item->nama }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                            <a href="{{ route('login') }}" class="greennature-donate-button"><span
                                    class="greennature-button-overlay"></span><span
                                    class="greennature-button-donate-text">Login</span></a>

                        </nav>
                        <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <!-- is search -->
