@extends('layouts.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Sub Menu</div>
                        </div>
                        @if ($errors->any())
                            <div class="card-body">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li class="text-danger">
                                            {{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('dashboard.sub_menu.store') }}" method="POST" enctype="multipart/form-data" class="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Parent Menu <span class="text-danger">*</span></label>
                                            <select name="menu_id" id="menu_id" class="form-control">
                                                @foreach ($menu as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tipe Menu <span class="text-danger">*</span></label>
                                            <select name="tipe_menu" id="tipe_menu" class="form-control">
                                                <option value="link">Link</option>
                                                <option value="page">Halaman</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nama Sub Menu <span class="text-danger">*</span></label>
                                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8 div_link">
                                        <div class="form-group">
                                            <label>Link <span class="text-danger">*</span></label>
                                            <input type="text" name="link" class="form-control" value="{{ old('link') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8 div_page d-none">
                                        <div class="form-group">
                                            <label>Kaitkan Halaman <span class="text-danger">*</span></label>
                                            <select name="page_id" id="page_id" class="form-control">
                                                @foreach ($pages as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Urutan <span class="text-danger">*</span></label>
                                            <input type="number" name="urutan" class="form-control" value="{{ old('urutan') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Tampil ?</label>
                                            <p class="demo">
                                                <input type="checkbox" name="visible" value="1" checked
                                                    data-toggle="toggle" data-onstyle="success" data-style="btn-round">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" class="btn btn-success formSubmitter">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Bootstrap Toggle -->
    <script src="{{ asset('') }}admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#tipe_menu').change(function(){
                var tipe_menu = $(this).val();
                if (tipe_menu == 'page') {
                    $('.div_page').removeClass('d-none').addClass('block');
                    $('.div_link').removeClass('block').addClass('d-none');
                } else {
                    $('.div_page').removeClass('block').addClass('d-none');
                    $('.div_link').removeClass('d-none').addClass('block');
                }
            })
        })
    </script>
@endpush
