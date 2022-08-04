@extends('layouts.front')
@section('content')
    <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
        <div class="greennature-page-title-overlay"></div>
        <div class="greennature-page-title-container container">
            <h1 class="greennature-page-title">Berita</h1>
            <span class="greennature-page-caption">Beranda / Berita</span>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="greennature-content">

            <!-- Above Sidebar Section-->

            <!-- Sidebar With Content Section-->
            <div class="with-sidebar-wrapper">
                <div class="with-sidebar-container container">
                    <div class="with-sidebar-left twelve columns">
                        <div class="with-sidebar-content twelve columns">
                            <section id="content-section-1">
                                <div class="section-container container">
                                    <div class="blog-item-wrapper">
                                        <div class="blog-item-holder">
                                            <div class="greennature-isotope" data-type="blog" data-layout="fitRows">
                                                <div class="clear"></div>
                                                @foreach ($beritas as $item)
                                                <div class="three columns">
                                                    <div class="greennature-item greennature-blog-grid greennature-skin-box">
                                                        <div class="greennature-ux greennature-blog-grid-ux">
                                                            <article id="post-852" class="post-852 post type-post status-publish format-standard has-post-thumbnail hentry category-fit-row tag-blog tag-life-style">
                                                                <div class="greennature-standard-style">
                                                                    <div class="greennature-blog-thumbnail" style="height: 200px;">
                                                                        <a href="{{ route('berita.show', $item->slug) }}"> <img src="{{ $item->thumbnail == '' ? asset('img/default.png') : url(Storage::url($item->thumbnail)) }}" alt="" style="height: 100%;object-fit: cover" /></a>
                                                                    </div>

                                                                    <div class="greennature-blog-grid-content">
                                                                        <header class="post-header">
                                                                            <h3 class="greennature-blog-title"><a href="{{ route('berita.show', $item->slug) }}">{{ Str::limit($item->judul, 30, '...') }}</a></h3>

                                                                            <div class="greennature-blog-info">
                                                                                <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="{{ route('berita.show', $item->slug) }}">{{ \Carbon\Carbon::parse($item->created_at)->locale('id_ID')->isoFormat('DD MMMM YYYY') }} | {{ $item->kategori->nama }}</a></div>
                                                                                <div class="blog-info blog-comment greennature-skin-info"> - </div>
                                                                                <div class="clear"></div>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                        </header>
                                                                        <!-- entry-header -->

                                                                        <div class="greennature-blog-content">{!! Str::limit(strip_tags($item->deskripsi), 100, '...') !!}
                                                                            <div class="clear"></div><a href="{{ route('berita.show', $item->slug) }}" class="excerpt-read-more">Selengkapnya</a></div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <!-- #post -->
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="greennature-pagination"><span aria-current='page' class='page-numbers current'>1</span>
                                            <a class='page-numbers' href='page/2/index.html'>2</a>
                                            <a class="next page-numbers" href="page/2/index.html">Next &rsaquo;</a></div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </section>
                        </div>

                        <div class="clear"></div>
                    </div>

                </div>
            </div>

            <!-- Below Sidebar Section-->

        </div>
        <!-- greennature-content -->
        <div class="clear"></div>
    </div>
    <!-- content wrapper -->
@endsection
