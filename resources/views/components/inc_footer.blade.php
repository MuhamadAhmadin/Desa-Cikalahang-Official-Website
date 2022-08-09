<footer class="footer-wrapper">
    <div class="footer-container container">
        <div class="footer-column three columns" id="footer-widget-1">
            <div id="text-5" class="widget widget_text greennature-item greennature-widget">
                <div class="textwidget">
                    <p><img src="{{ asset('front/images/logo.png') }}" style="width: 170px;" alt="" /></p>
                    <p>Official Website Desa Cikalahang</p>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-2">
            <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Informasi Kontak</h3>
                <div class="clear"></div>
                <div class="textwidget"><span class="clear"></span><span class="greennature-space" style="margin-top: -6px; display: block;"></span> Alamat: Desa Cikalahang Blok 1, No.1, RT 001 / RW 001 Kecamatan Dukupuntang
                    Kabupaten Cirebon
                    Provinsi Jawa Barat, 45652

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> {{ env('DESA_TELP') }}

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-mobile" style="vertical-align: middle; color: #fff; font-size: 20px; "></i> {{ env('DESA_PHONE') }}

                    <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                    <i class="greennature-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> {{ env('DESA_EMAIL') }}</div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-3">
            <div id="gdlr-recent-post-widget-5" class="widget widget_gdlr-recent-post-widget greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Berita terbaru</h3>
                <div class="clear"></div>
                <div class="greennature-recent-post-widget">
                    @php
                        $latest_news = \App\Models\Berita::latest()->take(2)->get();
                    @endphp
                    @foreach ($latest_news as $item)
                        <div class="recent-post-widget">
                            <div class="recent-post-widget-thumbnail" style="height: 60px;">
                                <a href="{{ route('berita.show', $item->slug) }}" style="height: 60px;">
                                    <img src="{{ $item->thumbnail == '' ? asset('img/default.png') : url(Storage::url($item->thumbnail)) }}" alt="" style="height: 100%;object-fit:cover"/>
                                </a>
                            </div>
                            <div class="recent-post-widget-content">
                                <div class="recent-post-widget-title"><a href="{{ route('berita.show', $item->slug) }}">{{ Str::limit($item->judul, 20, '...') }}</a></div>
                                <div class="recent-post-widget-info">
                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="{{ route('berita.show', $item->slug) }}">{{ \Carbon\Carbon::parse($item->created_at)->locale('id_ID')->isoFormat('DD MMMM YYYY') }}</a></div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="footer-column three columns" id="footer-widget-4">
            <div id="gdlr-recent-portfolio2-widget-6" class="widget widget_gdlr-recent-portfolio2-widget greennature-item greennature-widget">
                <h3 class="greennature-widget-title">Galeri terbaru</h3>
                <div class="clear"></div>
                @php
                        $latest_gallery = \App\Models\Galeri::latest()->take(6)->get();
                    @endphp
                <div class="greennature-recent-port2-widget">
                    @foreach ($latest_gallery as $item)
                        <div class="recent-port-widget-thumbnail" style="height: 70px;width:70px;">
                            <a href="{{ ($item->thumbnail == '') ? asset('img/default.png') : url(Storage::url($item->thumbnail)) }}" data-fancybox-group="greennature-gal-1" data-rel="fancybox"><img src="{{ $item->thumbnail == '' ? asset('img/default.png') : url(Storage::url($item->thumbnail)) }}" alt="" style="height: 100%;width:100%;object-fit:cover"/></a>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="copyright-wrapper">
        <div class="copyright-container container">
            <div class="copyright-left">
                <a href="#"><i class="greennature-icon fa fa-instagram" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
            </div>
            <div class="copyright-right">
               <a target="_blank" href="https://www.instagram.com/kkm_cikalahang/">&copy; 2022, made with <i class="fa fa-heart heart text-danger"></i> by KKM 35 UMC - Cikalahang</a> </div>
            <div class="clear"></div>
        </div>
    </div>
</footer>

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
