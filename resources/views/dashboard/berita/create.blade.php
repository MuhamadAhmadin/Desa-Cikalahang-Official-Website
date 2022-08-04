@extends('layouts.dashboard')


@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Berita</div>
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
                        <form action="{{ route('dashboard.berita.store') }}" method="POST" enctype="multipart/form-data"
                            class="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Judul Berita <span class="text-danger">*</span></label>
                                            <input type="text" name="judul" class="form-control"
                                                value="{{ old('judul') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kategori Berita <span class="text-danger">*</span></label>
                                            <select name="kategori_id" id="kategori_id" class="form-control">
                                                @foreach ($kategori as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 check-mobile">
                                        <div class="form-group">
                                            <label class="check-mobile-label">Deskripsi</label>
                                            <textarea name="deskripsi"
                                                class="form-control check-mobile-form ckeditor"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Thumbnail <span class="text-danger">*</span></label>
                                            <input type="file" name="thumbnail" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Visible ?</label>
                                            <p class="demo">
                                                <input type="checkbox" name="visible" value="1" checked data-toggle="toggle"
                                                    data-onstyle="success" data-style="btn-round">
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

    <!-- CKEditor -->
    <script src="{{ asset('') }}admin/js/plugin/ckeditor/ckeditor.js"></script>
    <!-- Bootstrap Toggle -->
    <script src="{{ asset('') }}admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
@endpush
