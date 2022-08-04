@extends('layouts.front')
@section('content')
    <div class="content-wrapper">
        <div class="greennature-content">

            <!-- Above Sidebar Section-->

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                <section id="content-section-1">
                    <div class="greennature-full-size-wrapper gdlr-show-all no-skin"
                        style="padding-bottom: 0px;  background-color: #ffffff; ">
                        <div class="greennature-master-slider-item greennature-slider-item greennature-item"
                            style="margin-bottom: 0px;">
                            <!-- MasterSlider -->
                            <div id="P_slider_1" class="master-slider-parent ms-parent-id-1">

                                <!-- MasterSlider Main -->
                                <div id="slider_1" class="master-slider ms-skin-default">

                                    @foreach ($slider as $item)
                                        <div class="ms-slide" data-delay="7" data-fill-mode="fill">
                                            <img src="{{ asset('') }}/front/plugins/masterslider/public/assets/css/blank.gif"
                                                alt="" title=""
                                                data-src="{{ url(Storage::url($item->thumbnail)) }}" />

                                            <a href="{{ $item->btn_link }}" target="_self"
                                                class="ms-layer ms-btn ms-btn-round ms-btn-n msp-preset-btn-159"
                                                data-effect="t(true,n,n,-500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="400"
                                                data-delay="987" data-ease="easeOutQuint" data-type="button"
                                                data-offset-x="1" data-offset-y="208" data-origin="ml"
                                                data-position="normal">{{ $item->btn_text }}</a>

                                            {{-- <div class="ms-layer  msp-cn-1-3" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="437" data-delay="625" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="105" data-origin="ml" data-position="normal">
                                            Untuk Bumi</div>

                                        <div class="ms-layer  msp-cn-1-2" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="425" data-delay="325" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-5" data-origin="ml" data-position="normal">
                                            Berbudidaya</div> --}}
                                            <div class="ms-layer  msp-cn-1-2" style=""
                                                data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="425"
                                                data-delay="325" data-ease="easeOutQuint" data-offset-x="0"
                                                data-offset-y="-5" data-origin="ml" data-position="normal">
                                                {{ $item->title }}</div>
                                            {{-- <div class="ms-layer  msp-cn-1-1" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="350" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-100" data-origin="ml" data-position="normal">{{ $item->title }}</div> --}}
                                        </div>
                                    @endforeach

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
                    <div class="greennature-color-wrapper  gdlr-show-all greennature-skin-brown-column-service"
                        style="background-color: #2d2418;  border-top: 5px solid #3f3221; padding-top: 0px; padding-bottom: 0px; ">
                        <div class="container">
                            <div class="four columns">
                                <div class="greennature-ux column-service-ux">
                                    <div class="greennature-item greennature-column-service-item greennature-type-2"
                                        style="margin-bottom: 0px;">
                                        <div class="column-service-image"><img
                                                src="{{ asset('') }}/front/upload/icon-service-1.png" alt=""
                                                width="80" height="80" /></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Alam Hijau</h3>
                                            <div class="column-service-content greennature-skin-content">
                                                <p>Pada zaman dahulu desa Cikalahang merupakan hutan yang sangat lebat,
                                                    orang-orangpun mendatangi lahan tersebut untuk menjadikan tempat
                                                    tinggal. semakin lama semakin banyak orang yang bertempat tinggal di
                                                    lahan tersebut. Hingga lahan tersebut menjadi ramai dan dinamakan sebagi
                                                    desa Sudi Mampir</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="four columns">
                                <div class="greennature-ux column-service-ux">
                                    <div class="greennature-item greennature-column-service-item greennature-type-2-bg"
                                        style="margin-bottom: 0px;background-color: #3f3221;">
                                        <div class="column-service-image"><img
                                                src="{{ asset('') }}/front/upload/icon-service-2.png" alt=""
                                                width="80" height="80" /></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Air Yang Bersih</h3>
                                            <div class="column-service-content greennature-skin-content">
                                                <p>Desa Cikalahang terletak di dekat kaki gunung Ciremai, membuatnya
                                                    memiliki kualitas air yang sangat baik dan kaya akan mineral. Hingga
                                                    pada akhirnya orang-orang lebih mengenal desa Sudi Mampir dengan sebutan
                                                    desa Cikalahang yang artinya Ci= cai/air, Lahang= hambar/ tak berasa</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="four columns">
                                <div class="greennature-ux column-service-ux">
                                    <div class="greennature-item greennature-column-service-item greennature-type-2"
                                        style="margin-bottom: 0px;">
                                        <div class="column-service-image"><img
                                                src="{{ asset('') }}/front/upload/icon-service-3.png" alt=""
                                                width="80" height="80" /></div>
                                        <div class="column-service-content-wrapper">
                                            <h3 class="column-service-title">Budidaya</h3>
                                            <div class="column-service-content greennature-skin-content">
                                                <p>Saat ini Desa Cikalahang lebih dominan dengan budidaya mereka dengan air,
                                                    yaitu Budidaya Ikan. Tidak lupa juga, Desa Cikalahang memiliki obyek
                                                    wisata Air (Telaga Pejaten, Hegar, dll). Maka dari itu, Bagi para
                                                    penikmat kuliner sepanjang jalan menuju tempat wisata banyak dijumpai
                                                    rumah makan terutama ikan bakar dengan cita rasa yang tinggi dengan
                                                    harga yang kompetitif.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="content-section-3">
                    <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all no-skin"
                        id="greennature-parallax-wrapper-1" data-bgspeed="0.11"
                        style="background-image: url('{{ asset('') }}/front/upload/donation-bg.jpg'); padding-top: 90px; padding-bottom: 65px; ">
                        <div class="container">
                            <div class="six columns">
                                <div class="greennature-item greennature-action-ads-item"
                                    style="background: url('{{ asset('') }}/front/upload/donation-bg-2.jpg'); ">
                                    <h3 class="action-ads-title" style="color: #5dc269;">Kotak Saran</h3>
                                    <div class="action-ads-caption greennature-skin-info">Suaramu demi kebaikan Kami</div>
                                    <div class="action-ads-divider" style="background: #5dc269;"></div>
                                    <div class="action-ads-content">
                                        <p>Kami menerima saran dan kritik yang membangun sehingga dapat dijadikan sebuah
                                            patokan benchmark untuk Desa Cikalahang terus lebih baik lagi.</p>
                                        <a class="action-ads-button large greennature-button"
                                            style="color: #ffffff;background-color: #5dc269;" href="#">Kotak
                                            Saran</a>
                                    </div>
                                </div>
                            </div>
                            <div class="six columns">
                                <div class="greennature-item greennature-action-ads-item"
                                    style="background: url('{{ asset('') }}/front/upload/donation-bg-1.jpg'); ">
                                    <h3 class="action-ads-title" style="color: #facc2e;">Pengaduan</h3>
                                    <div class="action-ads-caption greennature-skin-info">Laporkan kepada Kami</div>
                                    <div class="action-ads-divider" style="background: #facc2e;"></div>
                                    <div class="action-ads-content">
                                        <p>Laporkan pelanggaran-pelanggaran yang terjadi di desa Cikalahang. Perangkat Desa
                                            akan menegakkan disiplin dan ketertiban di lingkungan Desa Cikalahang.</p>
                                        <a class="action-ads-button large greennature-button greennature-lb-payment"
                                            href="#" style="color: #6d5b1c;background-color: #fec428;">Pengaduan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <section id="content-section-4">
                    <div class="greennature-color-wrapper  gdlr-show-all no-skin"
                        style="background-color: #ffffff; padding-bottom: 25px; ">
                        <div class="container">
                            <div
                                class="greennature-item-title-wrapper greennature-item  greennature-left-divider greennature-medium ">
                                <div class="greennature-item-title-container container">
                                    <div class="greennature-item-title-head">
                                        <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                            <img src="{{ asset('') }}/front/upload/icon-5.png" alt=""
                                                width="80" height="80" />Berita Cikalahang
                                        </h3><a class="greennature-item-title-link" href="#">Lebih Banyak</a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-item-wrapper type-classic-portfolio">
                                <div class="portfolio-item-holder  greennature-portfolio-column-4">
                                    <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                                        <div class="clear"></div>
                                        @foreach ($berita as $item)
                                            <div class="three columns">
                                                <div
                                                    class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                                    <div class="greennature-ux greennature-classic-portfolio-ux">
                                                        <div class="portfolio-thumbnail greennature-image"
                                                            style="height: 200px;">
                                                            <img src="{{ $item->thumbnail == '' ? asset('img/default.png') : url(Storage::url($item->thumbnail)) }}"
                                                                alt="" style="height: 100%;object-fit:cover" />
                                                            <span class="portfolio-overlay">&nbsp;</span>
                                                            <a class="portfolio-overlay-icon"
                                                                href="upload/shutterstock_161515241.jpg"
                                                                data-rel="fancybox"><span class="portfolio-icon"><i
                                                                        class="fa fa-search"></i></span></a>
                                                        </div>
                                                        <div class="portfolio-classic-content">
                                                            <h3 class="portfolio-title"><a
                                                                    href="{{ route('berita.show', $item->slug) }}">{{ Str::limit($item->judul, 40, '...') }}</a>
                                                            </h3>
                                                            <div class="greennature-portfolio-info">
                                                                <div class="portfolio-info portfolio-tag"><span
                                                                        class="info-head greennature-title">Tags </span><a
                                                                        href="#"
                                                                        rel="tag">{{ $item->kategori->nama }}</a><span
                                                                        class="sep"></div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="portfolio-excerpt">{!! Str::limit(strip_tags($item->deskripsi), 100, '...') !!}
                                                                <div class="clear"></div><a
                                                                    href="{{ route('berita.show', $item->slug) }}"
                                                                    class="excerpt-read-more">Read More</a>
                                                            </div><a class="portfolio-classic-learn-more"
                                                                href="#">Learn More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
                    <div class="greennature-color-wrapper  gdlr-show-all greennature-skin-service-half greennature-half-bg-wrapper"
                        style="background-color: #f5f5f5; padding-bottom: 20px; ">
                        <div class="greennature-half-bg greennature-bg-solid"
                            style="background-image: url({{ asset('') }}/front/images/slider/slider-3.jpg);"></div>
                        <div class="container">
                            <div class="six columns">
                                <div class="greennature-item greennature-content-item"></div>
                            </div>
                            <div class="six columns">
                                <div class="greennature-item greennature-icon-with-list-item">
                                    <div class="list-with-icon-ux greennature-ux">
                                        <div class="list-with-icon greennature-left">
                                            <div class="list-with-icon-image"><img
                                                    src="{{ asset('') }}/front/upload/icon-1.png" alt=""
                                                    width="80" height="80" /></div>
                                            <div class="list-with-icon-content">
                                                <div class="list-with-icon-title greennature-skin-title">Visi</div>
                                                <div class="list-with-icon-caption">
                                                    <p>Terbangunnya Tata Kelola Pemerintahan Desa yang baik dan bersih guna
                                                        terwujudnya kehidupan masyarakat desa yang adil, makmur dan
                                                        sejahtera serta berbudaya dan berakhlaq mulia.</p>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="list-with-icon-ux greennature-ux">
                                        <div class="list-with-icon greennature-left">
                                            <div class="list-with-icon-image"><img
                                                    src="{{ asset('') }}/front/upload/icon-2.png" alt=""
                                                    width="80" height="80" /></div>
                                            <div class="list-with-icon-content">
                                                <div class="list-with-icon-title greennature-skin-title">Misi</div>
                                                <div class="list-with-icon-caption">
                                                    <ul>
                                                        <li>Meningkatkan tata pemerintahan yang demokratis, trasparan,
                                                            akuntabel, efisien dan efektif</li>
                                                        <li>Meningkatkan perekonomian pedesaan yang memiliki daya saing
                                                            berbasis pada BUMDes dan Teknologi, baik pertanian, perikanan,
                                                            perkebunan dan home industry</li>
                                                        <li>Meningkatkan sumber daya manusia yang sehat (kesehatan), cerdas
                                                            (Pendidikan), agamis (Keagamaan), dan bermoral (Budaya)</li>
                                                        <li>Meningkatkan pembangunan ifrastruktur pedesaan yang terarah dan
                                                            berkualitas</li>
                                                        <li>Meningkatkan Peran Kelembagaan dan Masyarakat Desa dalam
                                                            mendorong pembangunan Desa</li>
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
                    <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all greennature-skin-dark-skin"
                        id="greennature-parallax-wrapper-3" data-bgspeed="0.15"
                        style="background-image: url('{{ asset('') }}/front/upload/service-bg-2.jpg'); padding-top: 135px; padding-bottom: 80px; ">
                        <div class="container">
                            <div class="three columns">
                                <div class="greennature-skill-item-wrapper greennature-skin-content greennature-item greennature-style-2"
                                    style="margin-bottom: 70px;"><img src="{{ asset('') }}/front/upload/icon-4.png"
                                        alt="" width="80" height="80" />
                                    <div class="greennature-skill-item-title" style="color: #5dc269;">2,000,000</div>
                                    <div class="greennature-skill-item-caption" style="color: #ffffff;">Penduduk</div>
                                </div>
                            </div>
                            <div class="three columns">
                                <div class="greennature-skill-item-wrapper greennature-skin-content greennature-item greennature-style-2"
                                    style="margin-bottom: 70px;"><img src="{{ asset('') }}/front/upload/icon-5.png"
                                        alt="" width="80" height="80" />
                                    <div class="greennature-skill-item-title" style="color: #5dc269;">5</div>
                                    <div class="greennature-skill-item-caption" style="color: #ffffff;">Obyek Wisata Alam
                                    </div>
                                </div>
                            </div>
                            <div class="three columns">
                                <div class="greennature-skill-item-wrapper greennature-skin-content greennature-item greennature-style-2"
                                    style="margin-bottom: 70px;"><img src="{{ asset('') }}/front/upload/icon-1.png"
                                        alt="" width="80" height="80" />
                                    <div class="greennature-skill-item-title" style="color: #5dc269;">3</div>
                                    <div class="greennature-skill-item-caption" style="color: #ffffff;">Masjid Desa</div>
                                </div>
                            </div>
                            <div class="three columns">
                                <div class="greennature-skill-item-wrapper greennature-skin-content greennature-item greennature-style-2"
                                    style="margin-bottom: 70px;"><img src="{{ asset('') }}/front/upload/icon-2.png"
                                        alt="" width="80" height="80" />
                                    <div class="greennature-skill-item-title" style="color: #5dc269;">7</div>
                                    <div class="greennature-skill-item-caption" style="color: #ffffff;">Wisata Kuliner
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                            <div class="greennature-item greennature-divider-item" style="margin-bottom: 60px;">
                                <div class="greennature-divider thick"></div>
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
@endsection
