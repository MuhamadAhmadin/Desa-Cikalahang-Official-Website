@extends('layouts.dashboard')

@push('css')
    <style>
        .amchart {
            width: 100%;
            height: 500px;
        }

    </style>
@endpush

@section('content')
    <div class="container">
        <div class="panel-header bg-success-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                        <h5 class="text-white op-7 mb-2">{{ env("APP_NAME") }}</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0 ">

                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row mt--2">
                <div class="col-md-12">
                    <div class="card full-height">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-wrap">
                                <div>
                                    <div class="card-title">Selamata Datang</div>
                                    <div class="card-category">Selamat Datang di Dashboard {{ env('APP_NAME') }}</div>
                                </div>
                                <div>
                                </div>
                            </div>
                            <div class="row mt-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
@endsection

@prepend('js')
    <!-- AMChart -->
    <script src="{{ asset('admin/js/plugin/amchart/core.js') }}"></script>
    <script src="{{ asset('admin/js/plugin/amchart/charts.js') }}"></script>
    <script src="{{ asset('admin/js/plugin/amchart/themes/animated.js') }}"></script>
    <script>
        // Themes begin
        am4core.useTheme(am4themes_animated);
        // Themes end

    </script>
@endprepend

@push('js')
    <!-- Chart Circle -->
    <script src="{{ asset('') }}admin//js/plugin/chart-circle/circles.min.js"></script>

    <script>
        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: 60,
            maxValue: 100,
            width: 7,
            text: 5,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: 70,
            maxValue: 100,
            width: 7,
            text: 36,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: 40,
            maxValue: 100,
            width: 7,
            text: 12,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

    </script>

@endpush
