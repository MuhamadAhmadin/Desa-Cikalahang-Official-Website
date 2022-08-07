@extends('layouts.front')
@section('content')
    <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
        <div class="greennature-page-title-overlay"></div>
        <div class="greennature-page-title-container container">
            <h1 class="greennature-page-title">Galeri</h1>
            <span class="greennature-page-caption">Galeri Desa Cikalahang</span>
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
                                    <div class="greennature-gallery-item greennature-item" style="margin-bottom: 60px;">
                                        @foreach ($galeris as $item)
                                            <div class="gallery-column four columns">
                                                <div class="gallery-item" style="height: 250px;">
                                                    <a href="{{ ($item->thumbnail == '') ? asset('img/default.png') : url(Storage::url($item->thumbnail)) }}" data-fancybox-group="greennature-gal-1" data-rel="fancybox" style="height: 250px;">
                                                        <img src="{{ ($item->thumbnail == '') ? asset('img/default.png') : url(Storage::url($item->thumbnail)) }}" alt="" style="height: 100%; object-fit:cover" />
                                                    </a>
                                                    </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                {{ $galeris->links('vendor.pagination.custom') }}
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
