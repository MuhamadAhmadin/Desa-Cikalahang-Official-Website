@extends('layouts.front')
@section('content')
    <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
        <div class="greennature-page-title-overlay"></div>
        <div class="greennature-page-title-container container">
            <h1 class="greennature-page-title">{{ $page->nama }}</h1>
            <span class="greennature-page-caption">Beranda / {{ $page->nama }}</span>
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
                                                @if ($page->thumbnail != '')
                                                <img class="img-fluid" src="{{ url(Storage::url($page->thumbnail)) }}" alt="{{ $page->judul }}">
                                                @endif
                                            </a>
                                            <div class="blog_text">
                                                <a href="javascript:void(0)">
                                                    <h4>{{ $page->nama }}</h4>
                                                </a>
                                                {!! $page->konten !!}
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
    </div>
    <!-- content wrapper -->
@endsection
