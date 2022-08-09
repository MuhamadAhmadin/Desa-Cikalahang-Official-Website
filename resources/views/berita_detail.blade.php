@extends('layouts.berita_template')
@section('content')
    {{-- <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
        <div class="greennature-page-title-overlay"></div>
        <div class="greennature-page-title-container container">
            <h1 class="greennature-page-title">{{ $berita->judul }}</h1>
            <span class="greennature-page-caption">{{ $berita->kategori->nama }}</span>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="greennature-content">

            <!-- Above Sidebar Section-->

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                <section id="content-section-1">
                    <div class="section-container container">
                        <div class="greennature-personnel-item-wrapper" style="margin-bottom: 100px;">
                            <div class="clear"></div>
                            <div class="">
                                <div class="greennature-item greennature-personnel-item plain-style">
                                    <div class="greennature-ux greennature-personnel-ux">
                                        <div class="content">
                                            <a href="javascript:void(0)" class="blog_img">
                                                @if ($berita->thumbnail != '')
                                                <img class="img-fluid" src="{{ url(Storage::url($berita->thumbnail)) }}" alt="{{ $berita->judul }}">
                                                @endif
                                            </a>
                                            <div class="blog_text">
                                                <a href="javascript:void(0)">
                                                    <h4>{{ $berita->nama }}</h4>
                                                </a>
                                                <div class="blog_text">
                                                    <a href="javascript:void(0)">
                                                        <h4>{{ $berita->judul }}</h4>
                                                    </a>
                                                    <ul>
                                                        <li><a href="#"><span>By :</span>
                                                                {{ $berita->user != null ? $berita->user->name : '-' }}</a></li>
                                                        <li><a
                                                                href="#">{{ \Carbon\Carbon::parse($berita->created_at)->locale('id_ID')->isoFormat('dddd, DD MMMM YYYY') }}</a>
                                                        </li>
                                                        <li><a
                                                                href="#">Kategori: {{ $berita->kategori->nama }}</a>
                                                        </li>
                                                    </ul>
                                                    {!! $berita->deskripsi !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                </section>
            </div>
            <!-- Below Sidebar Section-->

        </div>
        <!-- greennature-content -->
        <div class="clear"></div>
    </div> --}}
    <!-- content wrapper -->

    <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
        <div class="greennature-page-title-overlay"></div>
        <div class="greennature-page-title-container container">
            <h1 class="greennature-page-title">{{ $berita->judul }}</h1>
            <span class="greennature-page-caption">{{ $berita->kategori->nama }}</span>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="greennature-content">

            <!-- Above Sidebar Section-->

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                <div class="with-sidebar-container container">
                    <div class="with-sidebar-left eight columns">
                        <div class="with-sidebar-content twelve columns">
                            <section id="content-section-1">
                                <div class="section-container container">
                                    <div class="blog-item-wrapper">
                                        <div class="blog-item-holder">
                                            <div class="greennature-isotope" data-type="blog" data-layout="fitRows">
                                                <div class="clear"></div>
                                                <div class="twelve columns">
                                                    <div class="greennature-item greennature-blog-grid greennature-skin-box">
                                                        <div class="greennature-ux greennature-blog-grid-ux">
                                                            <article id="post-852" class="post-852 post type-post status-publish format-standard has-post-thumbnail hentry category-fit-row tag-blog tag-life-style">
                                                                <div class="greennature-standard-style">
                                                                    <div class="greennature-blog-thumbnail">
                                                                        @if ($berita->thumbnail != '')
                                                                        <img class="img-fluid" src="{{ url(Storage::url($berita->thumbnail)) }}" alt="{{ $berita->judul }}">
                                                                        @endif
                                                                    </div>

                                                                    <div class="greennature-blog-grid-content">
                                                                        <header class="post-header">
                                                                            <h3 class="greennature-blog-title"><a href="#">{{ $berita->judul }}</a></h3>

                                                                            <div class="greennature-blog-info">
                                                                                <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">{{ \Carbon\Carbon::parse($berita->created_at)->locale('id_ID')->isoFormat('dddd, DD MMMM YYYY') }}</a></div>
                                                                                <div class="clear"></div>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                        </header>
                                                                        <!-- entry-header -->

                                                                        <div class="greennature-blog-content">{!! $berita->deskripsi !!}</div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <!-- #post -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </section>
                        </div>

                        <div class="clear"></div>
                    </div>

                    <div class="greennature-sidebar greennature-right-sidebar four columns">
                        <div class="greennature-item-start-content sidebar-right-item">
                            <div id="search-3" class="widget widget_search greennature-item greennature-widget">
                                <div class="gdl-search-form">
                                    <form method="POST" id="searchform" action="{{ route('berita.search') }}">
                                        @csrf
                                        <div class="search-text" id="search-text">
                                            <input type="text" name="keyword" id="keyword" autocomplete="off" data-default="Pencarian..." />
                                        </div>
                                        <input type="submit" id="searchsubmit" value="" />
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                            <div id="gdlr-recent-portfolio-widget-2" class="widget widget_gdlr-recent-portfolio-widget greennature-item greennature-widget">
                                <h3 class="greennature-widget-title">Berita Terbaru</h3>
                                <div class="clear"></div>
                                <div class="greennature-recent-port-widget">
                                    @foreach ($berita_terbaru as $item)
                                    <div class="recent-post-widget">
                                        <div class="recent-post-widget-thumbnail">
                                            <a href="{{ route('berita.show', $item->slug) }}"><img src="{{ $item->thumbnail == '' ? asset('img/default.png') : url(Storage::url($item->thumbnail)) }}" alt="" width="150" height="150" /></a>
                                        </div>
                                        <div class="recent-post-widget-content">
                                            <div class="recent-post-widget-title"><a href="{{ route('berita.show', $item->slug) }}">{{ Str::limit($item->judul, 30, '...') }}</a></div>
                                            <div class="recent-post-widget-info">
                                                <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="{{ route('berita.show', $item->slug) }}">{{ \Carbon\Carbon::parse($berita->created_at)->locale('id_ID')->isoFormat('DD MMMM YYYY') }}</a></div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    @endforeach
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div id="tag_cloud-2" class="widget widget_tag_cloud greennature-item greennature-widget">
                                <h3 class="greennature-widget-title">Kategori</h3>
                                <div class="clear"></div>
                                <div class="tagcloud">
                                    @foreach ($kategori as $item)
                                    <a href="{{ route('berita_kategori.list', $item->slug) }}" class="tag-cloud-link tag-link-11 tag-link-position-{{ $loop->iteration }}" style="font-size: 8pt;" aria-label="{{ $item->nama }}">{{ $item->nama }}</a>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- Below Sidebar Section-->

        </div>
        <!-- greennature-content -->
        <div class="clear"></div>
    </div>
@endsection
